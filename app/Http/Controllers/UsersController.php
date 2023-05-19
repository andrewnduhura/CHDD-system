<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    // //
    // public function loadView($name){
    //     return view("user",['name'=> $name]);
        
    // }

    function getData()
    {
        return User::all();
    }
}
