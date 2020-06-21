<?php


namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Patient extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'first_name', 'last_name','email', 'phone', 'password','gender','countries_id','pain_types_id','birth_date', 'occupation'
    ];

  

    // public function Country()
    // {
    //     return $this->hasMany('App\Country','id','countries_id');
    // }

    public function countries()
    {
        return $this->hasMany(Country::class);
    }


    public function PainType()
    {
        return $this->hasMany('App\PainType','id','pain_types_id');
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

    
