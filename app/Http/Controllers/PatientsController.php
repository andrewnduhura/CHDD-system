<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Routing\Controller as BaseController;

class PatientsController extends Controller
{
    //
    function viewChart(){
        return DB::table('patients')->paginate();
        //->where('location',"Masaka")
        //->find(6);
        
        return view('query',['data'=>$data]);
        //return DB::table('patients')->count();
    }
}
