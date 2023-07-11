<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;



class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $formData = $request->session()->get('formData');
        $districts = DB::table('districts_1')->get();

        return view('results', compact('formData'));
    }
    public function index2(Request $request)
    {
        //
        $formData = $request->session()->get('formData');
        $districts = DB::table('districts_1')->get();
        // return view('patients')->with('formData', $formData);

        // return view('patients', ['districts' => $districts]);
        return view('patients', compact('formData', 'districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        try{
            $validatedData = $request->validate([
                'name' => 'required',
                'phone_number' => 'required',
                'address' => 'required',
                // 'district_id' => 'required|exists:districts_1,id',
            ]);
            
            $patient = new Patient();
            $patient->name = $request->input('name');
            $patient->phone_number = $request->input('phone_number');
            $patient->address = $request->input('address');
            $patient->district_id = (int) $request->input('district_id');
            $patient->save();
            
            $doctorId = Auth::id();
            
            // Retrieve the data stored in the session's 'formData'
            $formData = Session::get('formData');
            
            $processedResult = (int) $formData['diagnosis'][1];
            // dd($processedResult);
            $diagnosis = new Diagnosis();
            $diagnosis->patient_id = $patient->id; // Use the patient ID from the newly created patient
            $diagnosis->doctor_id = $doctorId;
            $diagnosis->result = $processedResult;
            $diagnosis->alcohol_drinking = $formData['AlcoholDrinking'];
            $diagnosis->smoking = $formData['Smoking'];
            $diagnosis->stroke = $formData['Stroke'];
            $diagnosis->diff_walking = $formData['DiffWalking'];
            // $diagnosis->diff_walking = 'good';
            $diagnosis->sex = $formData['Sex'];
            $diagnosis->age_category = $formData['AgeCategory'];
            $diagnosis->diabetic = $formData['Diabetic'];
            $diagnosis->gen_health = $formData['GenHealth'];
            $diagnosis->asthma = $formData['Asthma'];
            $diagnosis->kidney_disease = $formData['KidneyDisease'];
            $diagnosis->skin_cancer = $formData['SkinCancer'];
            $diagnosis->bmi = $formData['BMI'];
            $diagnosis->physical_health = $formData['PhysicalHealth'];
            $diagnosis->mental_health = $formData['MentalHealth'];
            $diagnosis->physical_activity = $formData['PhysicalActivity'];
            $diagnosis->sleep_time = $formData['SleepTime'];
            $diagnosis->save();

            // Clear the session data
            Session::forget('formData'); // or Session::flush();
            
            // return 'success';
            return view('notify');
            
        }catch (ValidationException $e) {
            // Handle validation errors
            return ('validation issues');
        } catch (QueryException $e) {
            // Handle database errors
            return view('errors.database')->with('error', 'Database error: ' . $e->getMessage());
        }
        // Redirect or perform additional actions as needed
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
         // Retrieve patients with result = 0 from the diagnoses table
        $patientIds = Diagnosis::where('result', 1)->pluck('patient_id');

        // Retrieve patients from the patients table based on the selected patient IDs
        $patients = Patient::whereIn('id', $patientIds)->get();

        // Pass the patients to the view
        return View::make('sickPatients', compact('patients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
