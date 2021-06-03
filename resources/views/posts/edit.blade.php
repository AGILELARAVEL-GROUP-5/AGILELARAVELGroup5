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


                   

<div class="h1 font-weight-bolder">Edit: {{ $post->title }}</div>

<form method="post" action="{{ route('posts.update', $post) }}">

    @csrf
    @method('patch')
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
    
            <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Title" minlength="5" maxlength="100" required />
     
    </div>

    <div class="form-group">
        <label>Content</label>
            <textarea name="content" class="form-control" placeholder="Content" minlength="5" maxlength="2000" required rows="10">{{ $post->content }}</textarea>
       
    </div>

    <div class="form-group">
        <label>Category</label>
 
                <select class="form-select" name="category" required>
                    <option value="" disabled selected>Select category</option>
                    <option value="html" {{ $post->category === 'html' ? 'selected' : null }}>HTML</option>
                    <option value="css" {{ $post->category === 'css' ? 'selected' : null }}>CSS</option>
                    <option value="javascript" {{ $post->category === 'javascript' ? 'selected' : null }}>JavaScript</option>
                    <option value="php" {{ $post->category === 'php' ? 'selected' : null }}>PHP</option>
                </select> 
    </div>


            <button type="submit"  style="width:100%;" class="btn btn-outline-primary">Update</button>
   


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





