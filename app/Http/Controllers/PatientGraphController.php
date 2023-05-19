<?php
// app/Http/Controllers/PatientGraphController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientGraphController extends Controller
{
    /**
     * Show the form for selecting date ranges.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('patients.graphs');
    }

    /**
     * Generate graphs for the selected date range.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Generate patient graphs using the selected date range
        $patients = $this->generatePatientGraphs($startDate, $endDate);

        return view('patients.graphs', compact('patients', 'startDate', 'endDate'));
    }

    /**
     * Generate patient graphs for the selected date range.
     *
     * @param  string  $startDate
     * @param  string  $endDate
     * @return \Illuminate\Support\Collection
     */
    protected function generatePatientGraphs($startDate, $endDate)
    {
        // Query the database to get the number of patients created for each day in the selected date range
        $patientCounts = \DB::table('patients')
            ->select(\DB::raw('DATE(created_at) as date'), \DB::raw('COUNT(*) as count'))
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('date')
            ->get();

        // Initialize an empty collection to hold the patient graphs
        $patients = collect();

        // Loop through each day in the selected date range and generate the patient graph
        $currentDate = $startDate;
        while ($currentDate <= $endDate) {
            $patientCount = $patientCounts->firstWhere('date', $currentDate);

            // Add the patient graph to the collection
            $patients->push([
                'date' => $currentDate,
                'count' => $patientCount ? $patientCount->count : 0,
            ]);

            // Move to the next day
            $currentDate = date('Y-m-d', strtotime($currentDate . ' +1 day'));
        }

        return $patients;
    }
}
