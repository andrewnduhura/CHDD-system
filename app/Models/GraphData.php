<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraphData extends Model
{
    //use HasFactory;
    protected $table = 'patients';
    
    public static function fetchData($startDate,$endDate){
        $graphData = \DB::select("
        SELECT COUNT(*) as count, DATE_FORMAT(created_at, '%d-%m-%Y') as date
        FROM patients
        WHERE created_at BETWEEN ? AND ?
        GROUP BY DATE_FORMAT(created_at, '%d-%m-%Y')
        ORDER BY created_at ASC;
    ", [$startDate, $endDate]);

    $dates = [];
    $counts = [];
    foreach ($data as $row) {
        $dates[] = $row->date;
        $counts[] = $row->count;
    }
    }
}
 