<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\MobileCode;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function verify()
    {
        return view('auth.verify');
    }

    public function generateRandomNumbers()
    {
        $numbers = rand(100000, 200000);
        return $numbers;
    }

    public function verifyMobileCode(Request $request)
    {
        $email = $request->email;
        $mobile_code = $request->code;
        $mobileCode = MobileCode::where('user_id', $email)->value('mobile_code');

        if($mobileCode == $mobile_code){
            return view('home');
        }else{
            return redirect()->back()->with('status', 'Mobile code provided is wrong!');
        }

    }
}
