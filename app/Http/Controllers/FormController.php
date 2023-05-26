<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function index(Request $request)
    {
        //
        $formData = $request->session()->get('formData');
        return view('patients')->with('formData', $formData);
    }
}
