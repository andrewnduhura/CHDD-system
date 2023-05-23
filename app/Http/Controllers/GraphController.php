<?php
// app/Http/Controllers/DateController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Routing\Controller as BaseController;
use App\Models\Patient;

class GraphController extends Controller
{

public function fetchGraphData(Request $request)
{
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');
    
    // $data = DB::select("
    //     SELECT COUNT(*) as count, DATE_FORMAT(created_at, '%d-%m-%Y') as date
    //     FROM patients
    //     WHERE created_at BETWEEN ? AND ?
    //     GROUP BY DATE_FORMAT(created_at, '%d-%m-%Y')
    //     ORDER BY created_at ASC;
    // ", [$startDate, $endDate]);

    // $dates = [];
    // $counts = [];
    // foreach ($data as $row) {
    //     $dates[] = $row->date;
    //     $counts[] = $row->count;
    // }



    $graphData = Patient::fetchData($startDate,$endDate);
    return response()->json($graphData);

    // $graphData = Patient::whereBetween('created_at', [$startDate, $endDate])
    //         ->orderBy('created_at')
    //         ->get();

    //     $dates = $graphData->pluck('created_at')->toArray();
    //     $counts = $graphData->pluck('id')->toArray();

    //     // Prepare the response data
    //     $response = [
    //         'created_at' => $dates,
    //         'id' => $counts,
    //     ];

    //     return response()->json($response);


//     return view('patient-count', [
//         'dates' => json_encode($dates),
//         'counts' => json_encode($counts),
//     ]);
// }
}
}