<?php
// app/Http/Controllers/DateController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Patient;


class DateController extends Controller
{

public function graph(){
    return view('date-selection');
}
    // Controller action that retrieves the data and passes it to the view
public function showPatientCount(Request $request)
{
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');
    
    $data = DB::select("
        SELECT COUNT(*) as count, DATE_FORMAT(created_at, '%d-%m-%Y') as date
        FROM patients
        WHERE created_at BETWEEN ? AND ?
        GROUP BY DATE_FORMAT(created_at, '%d-%m-%Y')
        ORDER BY created_at ASC;
    ", [$startDate, $endDate]);

    $dates = [];
    $counts = [];
    foreach ($data as $row) {
        $dates[] = $row->date;
        $counts[] = $row->count;
    }

    return view('patient-count', [
        'dates' => json_encode($dates),
        'counts' => json_encode($counts),
    ]);
}
}