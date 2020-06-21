<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppointmentDate extends Model
{
    protected $fillable = [
        'appoiment_id', 'doctor_id','date', 'doctor_action','patient_action'
    ];
    public function Doctor()
    {
        return $this->belongsTo('App\Doctor');
    }
    public function appointment()
    {
        return $this->belongsTo('App\Patient');
    }

}
