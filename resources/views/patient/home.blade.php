@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Complete Your Information') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('patient.update') }}">

                    @method('PUT')

                        @csrf

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name', auth()->user()->first_name) }}" required autocomplete="user_name" autofocus>

                                @error('user_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name', auth()->user()->last_name) }}" required autocomplete="user_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  value="{{ old('email', auth()->user()->email) }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ __('Birth Date') }}</label>

                            <div class="col-md-6">
                                <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}"  value="{{ old('birth_date', auth()->user()->birth_date) }}" required autocomplete="birth_date" autofocus>

                                @error('birth_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"  value="{{ old('phone', auth()->user()->phone) }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                            <select name="countries_id" class="form-control @error('countries_id') is-invalid @enderror">
                        <option value="">-- {{ __('choose your country') }} --</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}" {{$country->id == auth()->user()->country_id ? 'selected': '' }}>{{ $country->name }}</option>
                            @endforeach
                            </select>
                            </div>
                            </div>



                            <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Pain Type') }}</label>

                            <div class="col-md-6">
                            <select name="pain_types_id" class="form-control @error('paintype_id') is-invalid @enderror">
                        <option value="">-- {{ __('choose your pain type') }} --</option>
                        @foreach ($pain_types as $pain_type)
                            <option value="{{ $pain_type->id }}" {{$pain_type->id == auth()->user()->pain_types_id ? 'selected': '' }}>{{ $pain_type->name }}</option>
                            @endforeach
                            </select>
                            </div>
                            </div>

  

                    <div class="form-group row">
                        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('gender') }}</label>
                        <div class="col-md-6">

                    <select name="gender" id="gender" class="form-control" value="{{ old('gender', auth()->user()->gender) }}">
                        <option selected>Choose...</option>
                        <option value="male">male</option>
                        <option value="female">female</option>

                    </select>
                    </div>
                    </div>
 

    

                         

                       
                        <div class="form-group row">
                            <label for="occupation" class="col-md-4 col-form-label text-md-right">{{ __('Occupation') }}</label>

                            <div class="col-md-6">
                                <input id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" required autocomplete="occupation" value="{{ old('occupation', auth()->user()->occupation) }}">

                                @error('occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

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
@endsection
