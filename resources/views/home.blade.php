@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
               
                <h1>Profile</h1>
               
                </div>

                <div class="card-body">

                <form>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Name:') }}</label>
                             <h3> {{ $profile->name }}</h3>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('Email Address:') }}</label>
                             <h3>{{ $profile->email }}</h3>
                    </div>
                </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
