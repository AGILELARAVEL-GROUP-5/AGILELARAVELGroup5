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
                        <div class="col-lg-10">
                      
    <div class="row">
        <div class="col-lg-12 margin-tb">
           
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('projects.create') }}" title="Create a project">
                         <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

 <table class="table  table-responsive-lg">

    <thead>
        <tr class="table-warning">
            <th class="border border-3 border-dark text-primary">No</th>
            <th class="border border-3 border-dark text-primary">Title</th>
            <th class="border border-3 border-dark text-primary">Introduction</th>
            <th class="border border-3 border-dark text-primary">Location</th>
            <th class="border border-3 border-dark text-primary">Action</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($projects as $project)
        
            <tr class="table-success">
                <th class="border border-3 border-dark text-success" scope="row">{{ ++$i }}</th>
                <td class="border border-3 border-dark text-success font-weight-bold">{{ $project->title }}</td>
                <td class="border border-3 border-dark text-success font-weight-bold">{{ $project->introduction }}</td>
                <td class="border border-3 border-dark text-success font-weight-bold">{{ $project->location }}</td>
                <td class="border border-3 border-dark">
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">

                        <a href="{{ route('projects.show', $project->id) }}" title="show">
                        <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('projects.edit', $project->id) }}">
                        <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" style="border: none; background-color:transparent;" title="delete">
                        <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        
    </tbody>

</table>
    
</div>
</div>

                <br>
                <br>
                <br>
                <br>
               
                </div>
             </div>
        </div>
    </div>
</div>
@endsection