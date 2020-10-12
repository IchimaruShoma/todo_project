@extends('layouts.master')

@section('content')
    <h1>Sign In</h1>
    <hr/>

    @include('partials.flash_notification')

    <!-- Email Field -->
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="col-sm-6">
            <span class="help-block text-danger">
                {{ $errors -> first('email') }}
            </span>
        </div>
    </div>

    <!-- Password Field -->
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="col-sm-6">
            <span class="help-block text-danger">
                {{ $errors -> first('password') }}
            </span>
        </div>
    </div>

    <!-- remember_me Field -->
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
        </div>
    </div>

    <!-- Log In! Field -->
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-5">
        </div>
    </div>

@endsection
