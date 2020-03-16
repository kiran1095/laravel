<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\HTTP\Request;
use Illuminate\Support\Facades\DB;

class register extends Model
{
    protected $table='register';
    protected $primaryKey='id';
    protected $updated_at="last_update";

   public function insert(Request $req)
        {
        $user_reg= new register;
        $user_reg->first_name = $req->first_name;
        $user_reg->last_name = $req->last_name;
        $user_reg->email = $req->email;
        $user_reg->password = $req->password;
        $user_reg->phone = $req->phone;
        $user_reg->age = $req->age;
        $user_reg->gender = $req->gender;
        $user_reg->save();
        return true;
        }
}
