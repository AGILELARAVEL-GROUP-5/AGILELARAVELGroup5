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
                            
                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('posts.create') }}"> 
                                 Create a Post
                                </a>
                            </div>
                        </div>
                    </div>

                    @if (session('notification'))
                        <div class="notification is-primary">
                            {{ session('notification') }}
                        </div>
                    @endif
                    
                @foreach ($posts as $post)
                
                 <div class="content">

                <a href="{{ route('posts.show', [$post->slug]) }}">
                         <h1 class="title">{{ $post->title }}</h1>
                </a>
                    <p><b>Posted:</b> {{ $post->created_at->diffForHumans() }}</p>
                    <p><b>Category:</b> {{ $post->category }}</p>
                    <p><b>Content:</b> {{ $post->content }}</p>

<form method="post" action="{{ route('posts.destroy', $post) }}">
    @csrf
    @method('delete')
    <div class="field is-grouped">
        <div class="control">
            <a href="{{ route('posts.edit', $post) }}" class="button is-info is-outlined">
                Edit
            </a>
        </div>
        <div class="control">
            <button type="submit" class="button is-danger is-outlined">Delete</button>
        </div>
    </div>
</form>

</div>
                @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
