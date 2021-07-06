<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BitmController extends Controller
{
public function index(){

    return view("bitm");
}

public function newone(){

    $name="name";
    $phn="phone";

    return view("home.home",[
        'name'=>$name,
        'phn'=>$phn,

    ]);
}



public function myform(Request $request){
     return $request->all();



}

public function test(){


    $name ="sadnan";
    $fell ="lonely";
     return view('test.test',[

         'name'=>$name,
         'fell'=>$fell,

     ]);



}




}
