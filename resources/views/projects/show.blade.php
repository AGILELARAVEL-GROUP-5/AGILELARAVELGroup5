@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card  border border-dark border-5">
                <div class="card-header h1 font-weight-bolder bg-info">
                    AGILE CRUD
                </div>
         
                <div class="card-body">

                <br>

                <div class="text-center">
                    <img src="{{asset('/images/agilelogo.png')}}"  class="img-fluid"  >
                </div>

                <br>
                <br>

                <div class="row justify-content-lg-center">          
                        <div class="col-lg-9">

           
               
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left h2 font-weight-bolder">
                 {{ $project->title }} 
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('projects.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row h4">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $project->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Introduction:</strong>
                {{ $project->introduction }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Location:</strong>
                {{ $project->location }}
            </div>
        </div>
        
    </div>


    
    </div>
</div>

                <br>
                <br>
        
    
               
                 </div>
             </div>
        </div>
    </div>
</div>
@endsection