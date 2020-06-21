<?php

namespace App\Http\Controllers;
use App\Country;
use App\PainType;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countries = Country::all();
        $pain_types = PainType::all();
        return view('patient.home',compact('countries','pain_types')) ;    }
}
