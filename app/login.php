<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\HTTP\Request;
use Illuminate\Support\Facades\DB;

class login extends Model
{
    protected $table='login';
    protected $primaryKey='id';
    public $timestamps=false;

   public function insert(Request $req)
        {
        $user_login= new login;
        $user_login->email=$req->email;
        $user_login->password=$req->password;
        $user_login->save();
        return view('welcome');
        }
/*
    public function check(Request $req)
    {
        $user_check=new login;
        if(DB::table(login)->where([['email','=',$req->email],['password','=',$req->password]])->exists()){
            window.alert("logged in successfully");
            return view('');
        }
        else{
            window.alert("Please check the details entered");
        }
    }
*/

}
