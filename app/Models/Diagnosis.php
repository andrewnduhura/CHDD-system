<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'result',
        'alcohol_drinking',
        'smoking',
        'stroke',
        'diff_walking',
        'sex',
        'diabetic',
        'gen_health',
        'asthma',
        'kidney_disease',
        'skin_cancer',
        'age_category',
        'bmi',
        'physical_health',
        'mental_health',
        'physical_activity',
        'sleep_time',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
}
