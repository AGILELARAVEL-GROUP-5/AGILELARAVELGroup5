@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card border-dark rounded">
                <div class="card-header h1 bg-info">
                    Principle
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br>

                    <div class="text-center">
                         <img src="{{asset('/images/agileprinciples.jpg')}}"  class="img-fluid" >
                    </div>
        
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
