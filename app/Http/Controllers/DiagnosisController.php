<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Fascade\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class DiagnosisController extends Controller
{
    function index(){
        // Set the API endpoint URL
        $url = 'http://localhost:1234/';

        // Define the request data
        $data = [
            'BMI' => 16.6,
            'Smoking' => 'YES',
            'AlcoholDrinking' => 'NO',
            'Stroke' => 'NO',
            'PhysicalHealth' => 3,
            'MentalHealth' => 3,
            'DiffWalking' => 'NO',
            'Sex' => 'Female',
            'AgeCategory' => '55-59',
            'Race' => 'White',
            'Diabetic' => 'YES',
            'PhysicalActivity'=> 'YES',
            'GenHealth' => 'Very good',
            'SleepTime' => 5,
            'Asthma' => 'YES',
            'KidneyDisease' => 'NO',
            'SkinCancer' => 'Yes'
        ];

        // Encode the data as JSON
        $json_data = json_encode(['input' => $data]);

        // Set the request headers
        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];

        // Send the POST request to the API endpoint
        $client = new Client();
        $response = $client->post($url, [
            'headers' => $headers,
            'body' => $json_data,
        ]);

        // Get the response data as an associative array
        $response_data = json_decode($response->getBody(), true);

        // Print the response data
        // var_dump($response_data);
        $diagnosis = json_decode($response->getBody(), true)['diagnosis'];

        // return 'Diagnosis => '. $diagnosis;
        return 'Diagnosis => '. $diagnosis[0];


                
    }

    function getDiagnosis($input) {
        $response = Http::post('http://localhost:1234/', [
            'data' => [
                'age' => $input['AgeCategory'],
                'sex' => $input['Sex'],
                'bmi' => $input['BMI'],
                'physicalActivity' => $input['PhysicalActivity'],
                'alcoholConsumption' => $input['AlcoholDrinking'],
                'smoking' => $input['Smoking'],
                'diabetes' => $input['Diabetic'],
                'hypertension' => $input['Stroke'],
                'asthma' => $input['Asthma'],
                'kidneyDisease' => $input['KidneyDisease'],
                'skinCancer' => $input['SkinCancer'],
                'mentalHealth' => $input['MentalHealth'],
                'physicalHealth' => $input['PhysicalHealth'],
                'generalHealth' => $input['GenHealth'],
                'difficultyWalking' => $input['DiffWalking'],
                'hoursOfSleep' => $input['SleepTime'],
                'race' => $input['Race'],
            ],
        ]);
    
        $diagnosis = json_decode($response->body(), true)['diagnosis'];
    
        return $diagnosis;
    }
    function index2(){
        // Set the API endpoint URL
        $url = 'http://localhost:1234/';
    
        // Define the request data
        $data = [
            'BMI' => 16.6,
            'Smoking' => true,
            'AlcoholDrinking' => false,
            'Stroke' => false,
            'PhysicalHealth' => 3,
            'MentalHealth' => 3,
            'DiffWalking' => false,
            'Sex' => 'female',
            'AgeCategory' => '55-59',
            'Race' => 'white',
            'Diabetic' => true,
            'PhysicalActivity'=> true,
            'GenHealth' => 'Very good',
            'SleepTime' => 5,
            'Asthma' => true,
            'KidneyDisease' => false,
            'SkinCancer' => true
        ];
    
        // Encode the data as JSON
        $json_data = json_encode(['input' => $data]);
    
        // Set the request headers
        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    
        // Send the POST request to the API endpoint
        $client = new Client();
        $response = $client->post($url, [
            'headers' => $headers,
            'body' => $json_data,
        ]);
    
        // Get the response data as an associative array
        $response_data = json_decode($response->getBody(), true);
    
        // Print the response data
        // var_dump($response_data);
        
        if (array_key_exists('error', $response_data)) {
            // If there was an error, return the error message
            return 'Error: ' . $response_data['error'];
        } else {
            // Otherwise, check the diagnosis value
            $diagnosis = $response_data['diagnosis'];
            if (is_array($diagnosis)) {
                // If the diagnosis is an array, print each value
                return 'Diagnosis: ' . implode(', ', $diagnosis);
            } else {
                // Otherwise, print the single value
                return 'Diagnosis: ' . $diagnosis;
            }
        }   
    }
    
function index3(){
    // Set the API endpoint URL
    $url = 'http://localhost:1234/';

    // Define the request data
    $data = [
        'BMI' => 16.6,
        'Smoking' => 'YES',
        'AlcoholDrinking' => 'NO',
        'Stroke' => 'NO',
        'PhysicalHealth' => 3,
        'MentalHealth' => 3,
        'DiffWalking' => 'NO',
        'Sex' => 'Female',
        'AgeCategory' => '55-59',
        'Race' => 'White',
        'Diabetic' => 'YES',
        'PhysicalActivity'=> 'YES',
        'GenHealth' => 'Very good',
        'SleepTime' => 5,
        'Asthma' => 'YES',
        'KidneyDisease' => 'NO',
        'SkinCancer' => 'Yes'
    ];

    // Encode the data as JSON
    $json_data = json_encode(['input' => $data]);

    // Set the request headers
    $headers = [
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
    ];

    // Send the POST request to the API endpoint
    $client = new Client();
    $response = $client->post($url, [
        'headers' => $headers,
        'body' => $json_data,
    ]);

    // Get the response data as an associative array
    $response_data = json_decode($response->getBody(), true);

    // Print the response data
    // var_dump($response_data);
    
    if (array_key_exists('error', $response_data)) {
        // If there was an error, return the error message
        return 'Error: ' . $response_data['error'];
    } else {
        // Otherwise, check the diagnosis value
        $diagnosis = $response_data['diagnosis'];
        if (is_array($diagnosis)) {
            // If the diagnosis is an array, print each value
            return 'Diagnosis: ' . implode(', ', $diagnosis);
        } else {
            // Otherwise, print the single value
            return 'Diagnosis: ' . $diagnosis;
        }
    }   
}
function index4(){
    // Set the API endpoint URL
    $url = 'http://localhost:1234/';

    // Define the request data
    $data = [
        'BMI' => 16.6,
        'Smoking' => 'YES',
        'AlcoholDrinking' => 'NO',
        'Stroke' => 'NO',
        'PhysicalHealth' => '3',
        'MentalHealth' => '3',
        'DiffWalking' => 'NO',
        'Sex' => 'Female',
        'AgeCategory' => '55-59',
        'Race' => 'White',
        'Diabetic' => 'YES',
        'PhysicalActivity'=> 'YES',
        'GenHealth' => 'Very good',
        'SleepTime' => '5',
        'Asthma' => 'YES',
        'KidneyDisease' => 'NO',
        'SkinCancer' => 'Yes'
    ];

    // Encode the data as JSON
    $json_data = json_encode(['input' => $data]);

    // Set the request headers
    $headers = [
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
    ];

    // Send the POST request to the API endpoint
    $client = new Client();
    $response = $client->post($url, [
        'headers' => $headers,
        'body' => $json_data,
    ]);

    // Get the response data as an associative array
    $response_data = json_decode($response->getBody(), true);

    // Print the response data
    // var_dump($response_data);
    
    if (array_key_exists('error', $response_data)) {
        // If there was an error, return the error message
        return 'Error: ' . $response_data['error'];
    } else {
        // Otherwise, check the diagnosis value
        $diagnosis = $response_data['diagnosis'];
        if (is_array($diagnosis)) {
            // If the diagnosis is an array, print each value
            return 'Diagnosis: ' . implode(', ', $diagnosis);
        } else {
            // Otherwise, print the single value
            return 'Diagnosis: ' . $diagnosis;
        }
    }   
}


public function predict(Request $request)
{
    // Prepare input data
    $data = [
        "BMI" => 32.98,
        "Smoking" => "Yes",
        "AlcoholDrinking" => "No",
        "Stroke" => "Yes",
        "PhysicalHealth" => 10,
        "MentalHealth" => 0,
        "DiffWalking" => "Yes",
        "Sex" => "Male",
        "AgeCategory" => "75-79",
        "Race" => "White",
        "Diabetic" => "YES",
        "PhysicalActivity"=> "YES",
        "GenHealth" => "Poor",
        "SleepTime" => 4,
        "Asthma" => "No",
        "KidneyDisease" => "No",
        "SkinCancer" => "Yes"
    ];
    
    $payload = json_encode([$data]);
    
    // Set the URL of the Flask application
    $url = "http://localhost:1234/";
    
    // Set the content type of the request
    $options = array(
        'http' => array(
            'header' => "Content-type: application/json\r\n",
            'method' => 'POST',
            'content' => $payload
        )
    );
    
    // Send the request and get the response
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    
    // Check if the response is not empty
    if (!empty($response)) {
        // Decode the JSON response into an associative array
        $result = json_decode($response, true);
    
        // Check if the 'diagnosis' key exists in the result
        if (isset($result['diagnosis'])) {
            // Get the diagnosis value
            $diagnosis = $result['diagnosis'];
            echo "Diagnosis: ";
            print_r($diagnosis);
        } else {
            echo "Failed to get diagnosis";
        }
    } else {
        echo "Failed to get prediction";
    }
    
}

    
}
