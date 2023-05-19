<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    // //
    // public function loadView($name){
    //     return view("user",['name'=> $name]);
        
    // }

    function viewLoad()
    {
        return view('user',['user'=>'jonah']);
    }
}
