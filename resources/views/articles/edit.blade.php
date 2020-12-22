@extends('layout.app')
@section('title')
    Edit Article
@endsection
@section('content')
    <form method="post" action="/edit/{{$article->id}}">
        <input type="hidden" name="id" value="{{ $article->id }}">
            <div class="form-group">
                <input required="required" placeholder="Enter title here" type="text" name="title" class="form-control" value="{{ $article->title }}"/>
            </div>
            <div class="form-group">
                <textarea name='description' class="form-control">
                    {{$article->description}}
                </textarea>
                <textarea name='content' class="form-control">
                    {{ $article->content }}
                </textarea>
            </div>
        <input type="submit" name='edit' class="btn btn-success" value = "Update!">
    </form>
@endsection
