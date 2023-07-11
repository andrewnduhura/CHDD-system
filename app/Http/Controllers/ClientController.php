<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\Http;

class ClientController extends Controller
{
    //
    function index(){
        return Http::get();
        //return "App data will be here";
    }
}
