<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

    //Form validation
    public function getData(Request $req){
        $req->validate([
            'username'=>'required | max:10'
            ,'password'=>'required | min:5']);
        return $req->input();
        
    }
public function testRequest(){
    return "test data";
 }
 }
 