<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_controller extends Controller
{
    function login(Request $r)
    {
        $r->validate([
            'email'=>'required|email',
            'password'=>'min:6'
        ]);
        echo "<br>";
        $email=$r->input('email');
        echo "Welcome! You have been logged in as ".$email;
       // $a=$r->url;
      // print_r($r->input());
    }
}
