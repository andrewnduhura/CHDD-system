<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    //
    public function operations(){
        //return DB::table('patients')->get();
        //return DB::table('patients')->avg('id');
        return DB::table('patients')->get('firstname');
    }
}
