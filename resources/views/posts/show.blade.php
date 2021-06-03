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



                        @if (session('notification'))
                        <div class="alert alert-info">
                            {{ session('notification') }}
                        </div>
                @endif

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
                         

                                <a href="{{ route('posts.show', [$post->slug]) }}">
                                    <div class = "h1 font-weight-bolder" >{{ $post->title }} </div>
                                </a>

                    <p><b>Posted:</b> {{ $post->created_at->diffForHumans() }}</p>
                    <p><b>Category:</b> {{ $post->category }}</p>
                    <p><b>Content:</b> {{ $post->content }}</p>

            <form method="post" action="{{ route('posts.destroy', $post) }}">

                @csrf
                @method('delete')
                    
                <a href="{{ route('posts.edit', $post) }}" class="btn btn-outline-info">
                     Edit
                </a>
                <button type="submit" class="btn btn-outline-danger">Delete</button>
                   
            </form>

            <br>
            <br>

    </div>
</div>


                <br>
                <br>
                <br>



                </div>
            </div>
        </div>
    </div>
</div>


@endsection
