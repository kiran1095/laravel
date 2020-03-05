<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\login;


class login_controller extends Controller
{
    function insertdata(Request $r)
    {
        $r->validate([
            'email'=>'required|email',
            'password'=>'min:6'
        ]);
        echo "<br>";
        //$email=$r->input('email');
        //echo "Welcome! You have been logged in as ".$email;
       // $a=$r->url;
      // print_r($r->input());
      //echo "all the data in array form"
      $r->session()->put('email',$r->input('email'));
      $email=$r->session()->get('email');
      echo $email;
      $data=array('email'=>$email,'check'=>"checked");
     //$r->session()->flash('data','this is laravel sessions');
     //return view('welcome')->with($data);

     //$user=DB::select('select * from profilev2');
     // print_r($user);

DB::beginTransaction();
if(DB::table('login')->where([['email','=',$r->email],['password','=',$r->password]])->exists()){
   // alert('logged in ');
    $result="logged in successfully";
    return view('welcome')->with('result',$result);
}
else{
    //alert('invalid entries');
    $result="Please check the details entered";
    return view('login')->with('result',$result);
}
DB::commit();
    }
}
