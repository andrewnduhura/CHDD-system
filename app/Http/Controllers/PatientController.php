<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Patient;
use Carbon\Carbon;

class PatientController extends Controller
{
  
  public function chart(Request $request)
  {
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');

        $startDate = Carbon::parse($startDate)->startOfDay();
        $endDate = Carbon::parse($endDate)->endOfDay();

        $patients = Patient::whereBetween('created_at', [$startDate, $endDate])->get();

        // $data = Patient::select('id','created_at')->get()->groupBy(function($data){
        //   return Carbon::parse($data->created_at)->format('m');
        // });

        $patients = Patient::whereBetween('created_at', [$startDate, $endDate])
            ->orderBy('created_at')
            ->get();

    // Create a chart
    $chart = Charts::database($patients, 'line', 'highcharts')
    ->title('Patient Growth')
    ->elementLabel('Total Patients')
    ->dimensions(1000, 500)
    ->responsive(false)
    ->lastByDay(7, true);

    return view('patients.chart', compact('patients'));
    return view('patients.chart',['data'=>$data]);  

    
  }

  public function showDateRangeForm()
{
  dd('Controller method called!');
    return view('patients.date-range');
}
}
