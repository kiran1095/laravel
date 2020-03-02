<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/hello/{id?}',function($id="null"){
    return view('hello',["id"=>$id]);
});

Route::get('/', function () {
    return view('welcome');
});

//Route::redirect("/","/hello/{id?}");

Route::get('/hii/{abc}', function ($abc) {
    $a=[
        'abc'=>'my_first_post'
    ];
    return view('posts',['abc'=>$a[$abc]]);
});

Route::get('/login',function(){
    return view('login');
});


