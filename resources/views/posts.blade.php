@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>List of Posts</h1>
                <ul class="list-group">
                    @foreach ($posts as $post)
                        <li class="list-group-item">
                            <h2>{{ $post->title }}</h2>
                            <p>{{ $post->content }}</p>
                            <p>Posted by: {{ $post->user->name }}</p>
                            <p>Created at: {{ $post->created_at->diffForHumans() }}</p>
                            <a href="{{ route('posts.delete', $post->id) }}" class="btn btn-danger">Delete</a>
                        </li>
                    @endforeach
                </ul>

                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            {{ $posts->links() }}
                        </ul>
                    </nav>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Sidebar</div>
                    <div class="card-body">
                        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
