<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PainType extends Model
{
    protected $fillable = [
         'name', 'code'
    ];
    public function Patient()
    {
        return $this->hasMany('App\Patient','id','patient_id');
    }
}
