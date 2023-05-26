<?php
// app/Http/Controllers/DateController.php

// app/Http/Controllers/DateController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Patient;


class DateController extends Controller
{

public function graph(){
    return $this->showPatientCountForm();
    //return view('date-selection');
}
    // Controller action that retrieves the data and passes it to the view

public function showPatientCountForm(){
    $locations = Patient::distinct('location')->pluck('location');
    return view('date-selection', ['locations' => $locations]);


}
public function showPatientCount(Request $request)
{
    
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');
    $location = $request->input('location');

    $query = DB::table('patients')
            ->select(DB::raw('COUNT(*) as count, DATE_FORMAT(created_at, "%d-%m-%Y") as date'))
            ->whereBetween('created_at', [$startDate, $endDate]);

        if ($location) {
            $query->where('location', $location);
        }

        $data = $query->groupBy(DB::raw('DATE_FORMAT(created_at, "%d-%m-%Y")'))
            ->orderBy('created_at', 'ASC')
            ->get();

        $dates = [];
        $counts = [];
        foreach ($data as $row) {
            $dates[] = $row->date;
            $counts[] = $row->count;
        }

        return view('patient-count', [
            'dates' => json_encode($dates),
            'counts' => json_encode($counts),
            'location' =>$location,
        ]);
    }

    public function submitDates(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $location = $request->input('location');

        // Redirect to the graph route with query parameters
        return redirect()->route('fetch-graph-data', [
            'start_date' => $startDate,
            'end_date' => $endDate,
            //'location' => $location,
        ]);
        return redirect()->route('dates.form')->withInput();
    }
}

    
    //return redirect()->route('dates.graph', ['start_date' => $startDate, 'end_date' => $endDate]);

// public function generateGraph(Request $request){
//     $startDate = $request->query('start_date');
//     $endDate = $request->query('end_date');
//     $location = $request->input('location');

//     $data = DB::select("
//         SELECT COUNT(*) as count, DATE_FORMAT(created_at, '%d-%m-%Y') as date
//         FROM patients
//         WHERE created_at BETWEEN ? AND ?
//         GROUP BY DATE_FORMAT(created_at, '%d-%m-%Y')
//         ORDER BY created_at ASC;
//     ", [$startDate, $endDate]);

//     if ($location) {
//         $query->where('location', $location);
//     }


//     $dates = [];
//     $counts = [];
//     foreach ($data as $row) {
//         $dates[] = $row->date;
//         $counts[] = $row->count;
//     }

//     return view('patient-count', [
//         'dates' => json_encode($dates),
//         'counts' => json_encode($counts),
//     ]);
// }



// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Routing\Controller as BaseController;
// use App\Models\Patient;
// use App\Models\GraphData;


// class DateController extends Controller
// {

// public function graph(){
//     return view('date-selection');
//     //return view('graph-generation');
// }
    // Controller action that retrieves the data and passes it to the view
// public function showPatientCount(Request $request)
//code here as well
// public function fetchGraphData(Request $request)
// {
//     $startDate = $request->input('start_date');
//     $endDate = $request->input('end_date');
    
    //stop here
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


//Here is the code i need
    // $graphData = Patient::fetchData($startDate,$endDate);
    // return response()->json($graphData);
    // return view('graph', compact('graphData'));

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
