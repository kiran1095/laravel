<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\register;

class registration extends Controller
{
    function insertdata(Request $r)
    {
        $r->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'password'=>'min:6',
            'phone'=>'required',
            'age'=>'required',
            'gender'=>'required'
        ]); 

      $r->session()->put('email',$r->input('email'));
      $email=$r->session()->get('email');
      //echo $email;


DB::beginTransaction();
        
            $user_register= new register;
           if($user_register->insert($r)){
           }
           else{
               $result='please check the details entered';
               return view('register')->with('result','$result');
           }
DB::commit();
return view('login');
        }
        
}
            
        


/*

if(DB::table('register')->where([['email','=',$r->email],['password','=',$r->password]])->exists()){
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




*/