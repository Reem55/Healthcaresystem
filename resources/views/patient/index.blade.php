@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Complete Your Information') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('patient.update') }}">



        <table class="table table-striped">
            <thead>
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Birth Date</td>
                <td>Mobile</td>
                <td>Country</td>
                <td>Pain Type</td>
                <td>Gender</td>
                <td>occupation</td>

            </tr>
            </thead>
            <tbody>
            @foreach($Patient as $patient)



                <tr>
                    <td>  {{ $patient->first_name }}</td>
                    <td>  {{ $patient->last_name }}</td>
                    <td>  {{ $patient->birth_date}}</td>
                    <td>  {{ $patient->phone }}</td>
                    <td>  {{ $patient->gender }}</td>
                     <!-- @foreach ($patient->pain_types  as $pain_type)
                    <td> {{ $pain_type->name}}</td>
                    @endforeach -->

                    <!-- @foreach ($patient->countries  as $country)
                    <td> {{ $countries->name}}</td>
                    @endforeach -->

                   
                        
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>


                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Complete') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>