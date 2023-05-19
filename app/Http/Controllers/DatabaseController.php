<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    //
    function index(){
        echo "Hello from database controller";
        return DB::select("select * from users");
    }
}
