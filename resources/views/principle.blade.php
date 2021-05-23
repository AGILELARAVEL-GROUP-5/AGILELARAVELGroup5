@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Principle</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br>

        
        <img src="{{asset('/images/agileprinciples.jpg')}}" style="height: 100%; width: 100%; position: relative;">
        
        <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



