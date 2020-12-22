@extends('layout.app')
@section('content')
    @if($article)
        <div class="card">
            <h5 class="card-header">Title: {{ $article->title }}</h5>
            <div class="card-body">
                <h5 class="card-title">{{ $article->content }}</h5>
                <p class="card-text">Created at {{ $article->created_at->format('M d,Y \a\t h:i a') }}</p>
                <a href="edit/{{ $article->id }}" class="btn btn-primary">Edit</a>
                <a href="delete/{{ $article->id }}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    @endif
@endsection
