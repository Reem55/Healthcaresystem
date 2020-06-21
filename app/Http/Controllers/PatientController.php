<?php

namespace App\Http\Controllers;
use App\Patient;
use App\Country;
use App\PainType;
use Auth;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Patients = Patient::with('countries','pain_types')->get();
        $countries = Country::all();
        $pain_types = PainType::all();
        return view('patient.index',compact('countries','pain_types')) ;
    }

   
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit() {
        $countries = Country::all();
        $pain_types = PainType::all();
        return view('patient.home',compact('countries','pain_types')) ;
      
}


public function update(Request $request) {
            $request->validate([
                'first_name' =>'required',
                'last_name' =>'required',
                'email' =>'required|email|unique:users',
                'phone' =>'required',
                'gender' =>'required',
                'countries_id'=>'required',
                'birth_date'=>'required',
                'pain_types_id' =>'required',
                'occupation'=>'required',

            ]);
        $patient = auth()->user();
       
         $patient->update($request->all());
        return redirect('/patient/home')->with('success');

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
