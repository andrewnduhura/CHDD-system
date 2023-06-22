<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;

class DiagnosisController extends Controller
{
    // function getDiagnosis($input) {
    function getDiagnosis(Request $request)
    {
        // Set the API endpoint URL
        $url = "http://localhost:1234/";

        // Get the form data from the request
        $formData = $request->all();

        // determine age category to be used in diagnosis
        $age = intval($formData['Age']);
        $ageCategory = $this->getAgeCategory($age);

        // Set the age category in the form data
        $formData['AgeCategory'] = $ageCategory;

        // Remove the age field from the form data
        unset($formData['Age']);

        // Add an index to the form data
        $indexedData = ['input' => $formData];
        // dd($indexedData);

        // Encode the form data as JSON
        $json_data = json_encode($indexedData);

        // Set the request headers
        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];

        // Send the POST request to the Flask app
        $client = new Client();
        $response = $client->post($url, [
            'headers' => $headers,
            'body' => $json_data,
        ]);

        // Get the response data as an associative array
        $response_data = json_decode($response->getBody(), true);

        if (array_key_exists('error', $response_data)) {
            // If there was an error, return the error message
            return 'Error: ' . $response_data['error'];
        } else {
            // Otherwise, check the diagnosis value
            $diagnosis = $response_data['diagnosis'];

            if (is_array($diagnosis)) {
                // If the diagnosis is an array, print each value
                $formData['diagnosis'] = implode(', ', $diagnosis);
            } else {
                // Otherwise, store the single value
                $formData['diagnosis'] = $diagnosis;
            }

            // Set the updated form data in the session
            Session::put('formData', $formData);

            // Redirect to the desired route for displaying the form data
            // dd($formData);
            return redirect()->route('form.result');
        }
    }
    // Determine the age category based on the input age
    private function getAgeCategory($age)
    {
        if ($age >= 80) {
            return '80 or older';
        } elseif ($age >= 65 && $age <= 69) {
            return '65-69';
        } elseif ($age >= 75 && $age <= 79) {
            return '75-79';
        } elseif ($age >= 40 && $age <= 44) {
            return '40-44';
        } elseif ($age >= 70 && $age <= 74) {
            return '70-74';
        } elseif ($age >= 60 && $age <= 64) {
            return '60-64';
        } elseif ($age >= 50 && $age <= 54) {
            return '50-54';
        } elseif ($age >= 45 && $age <= 49) {
            return '45-49';
        } elseif ($age >= 18 && $age <= 24) {
            return '18-24';
        } elseif ($age >= 35 && $age <= 39) {
            return '35-39';
        } elseif ($age >= 30 && $age <= 34) {
            return '30-34';
        } elseif ($age >= 25 && $age <= 29) {
            return '25-29';
        } else {
            return '18-24';
            // Handle cases where age does not fall into any defined range
            return '';
        }
    }
}
