<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //use HasFactory;
    protected $table = 'patients';
    
    public static function fetchData($startDate,$endDate){
        $graphData = \DB::table('patients')
        ->select(\DB::raw('COUNT(*) as count, DATE_FORMAT(created_at, "%d-%m-%Y") as date'))
        ->whereBetween('created_at',[$startDate,$endDate]) 
        ->groupBy(\DB::raw('DATE_FORMAT(created_at, "%d-%m-%Y")'))
        ->orderBy('created_at','ASC')
        ->get();
        
    
        return $graphData;

    
    }
}

 