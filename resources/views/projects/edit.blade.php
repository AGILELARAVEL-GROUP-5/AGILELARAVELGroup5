@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card border border-dark border-5">
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
            <div class="float-left h2">
                    Edit AGILE
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('projects.index') }}" title="Go back"> 
                        <i class="fas fa-backward"></i>
                 </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ooops!</strong> Enter all.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row h4">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" value="{{ $project->title }}" class="form-control" style="height:55px" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Introduction:</strong>
                    <textarea class="form-control" style="height:75px" name="introduction"
                        placeholder="Introduction">{{ $project->introduction }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Location:</strong>
                    <input type="text" name="location" class="form-control" style="height:55px" placeholder="{{ $project->location }}"
                        value="{{ $project->location }}">
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" style="width: 100%;" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
                

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