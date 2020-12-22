@extends('layout.app')
@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">You are welcome to add your own article here!</h1>
            <p>
                <a href="/create" class="btn btn-primary my-2">Add an article</a>
            </p>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
                <div class="row">
                    @foreach ($articles as $article)
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">{{ $article->description }}</p>
                                <a href="/{{ $article->id }}" class="btn btn-primary" id="{{ $article->id }}">See more</a>
                                <small class="text-muted">{{ $article->created_at }}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
