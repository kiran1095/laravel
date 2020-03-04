<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\HTTP\Request;

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

}
