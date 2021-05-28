
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card border border-dark border-5">
                <div class="card-header h1 font-weight-bolder bg-info">

                    Posts

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="float-left">
                                <a class="btn btn-link" href="{{ route('posts.index') }}"> 
                                    All Posts
                                </a>
                            </div>
                        
                        </div>
                    </div>

                    @if (session('notification'))
                        <div class="notification is-primary">
                            {{ session('notification') }}
                        </div>
                    @endif
                    <div class="content">


        <h1 class="title">{{ $post->title }}</h1>
 
    <p><b>Posted:</b> {{ $post->created_at->diffForHumans() }}</p>
    <p><b>Category:</b> {{ $post->category }}</p>
    <p><b>Content:</b>  {{ $post->content }}</p>


</div>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection
