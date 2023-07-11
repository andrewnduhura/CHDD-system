<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\Patient;
use Carbon\Carbon;
use DB;

class AdminController extends Controller
{
  
  public function pieChart()
  {
    $result = DB::select(DB::raw("select name as pat_name from patients"));

    // $data = Patient::select('id','created_at')->get()->groupBy(function($data){
    //       return Carbon::parse($data->created_at)->format('m');
    //     });
        return view('pie');

  }
}