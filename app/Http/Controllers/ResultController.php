<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use App\Models\Result;

class ResultController extends Controller
{
    /**
     * Show the form for sending results.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('send_results');
    }

    /**
     * Send the results to the provided phone number.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        $phoneNumber = $request->input('phone_number');
        $results = Result::all();

        // Send the results to the provided phone number using Twilio
        $client = new Client('ACbc522a602933d55c676ffc10c43041ee', '9aa3d2961e9ae856bcd9ab0d73c99e3a');
        $message = $client->messages->create(
            $phoneNumber,
            [
                'from' => +13158175961,
                'body' => $results
            ]
        );

        return redirect()->back()->with('success', 'Results sent successfully.');
    }
}
