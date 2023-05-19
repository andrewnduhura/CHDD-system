<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Patient;

class MemberrsController extends BaseController
{
    //
    function show(){
        //paginate function
        $data = Patient::paginate(2);
        
        //all table values
        //$data = Patient::all();
        return view('list',['patients'=> $data]);

        $post =DB::table('patients')->paginate(3);
        return view("chart");
    }
    function delete($id){
        $data= Patient::find($id);
        $data->delete();
        return redirect('list');
    }
    function viewChart(){
       

    }

}
