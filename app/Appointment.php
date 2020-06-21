<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'patient_id', 'paintype_id','status'
    ];

    public function Patient()
    {
        return $this->belongsTo('App\Patient');
    }
}
