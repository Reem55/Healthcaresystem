<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'code', 'name'
    ];


    public function Patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
