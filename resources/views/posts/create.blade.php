@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card border border-dark border-5">
                <div class="card-header h1 font-weight-bolder bg-info">

                    Post CRUD

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
                        <div class="col-lg-12 margin-tb clearfix">

                        <div class="float-left">
                                <a class="btn btn-link" href="{{ route('posts.index') }}"> 
                                    All Posts
                                </a>
                        </div>
                            
                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('posts.create') }}"> 
                                 Create a Post
                                </a>
                            </div>

                    </div>
                </div>

                <br>
                <br>          

                <div class="row justify-content-lg-center">          
                        <div class="col-lg-9">    
                
<div class=" h1 font-weight-bolder">Create a new post</div>

<form method="post" action="{{ route('posts.store') }}">

    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <div class="form-group">
        <label>Title</label>
        
            <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Title" minlength="5" maxlength="100" required />

    </div>

    <div class="form-group">
        <label>Content</label>
            <textarea name="content" class="form-control" placeholder="Content" minlength="5" maxlength="2000" required rows="10">{{ old('content') }}</textarea>
    </div>

    <div class="form-group">
        <label>Category</label>
                <select class="form-select" name="category" required>
                    <option value="" disabled selected>Select category</option>
                    <option value="html" {{ old('category') === 'html' ? 'selected' : null }}>HTML</option>
                    <option value="css" {{ old('category') === 'css' ? 'selected' : null }}>CSS</option>
                    <option value="javascript" {{ old('category') === 'javascript' ? 'selected' : null }}>JavaScript</option>
                    <option value="php" {{ old('category') === 'php' ? 'selected' : null }}>PHP</option>
                </select>
    </div>



            <button type="submit" style="width:100%;" class="btn btn-outline-primary">Publish</button>
  

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


