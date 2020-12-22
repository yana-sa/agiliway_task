@extends('layout.app')

@section('title')

    Add New Article

@endsection

@section('content')

    <form action="/create" method="post">

        <div class="form-group">
            <input required="required" placeholder="Enter title here" type="text" name = "title" class="form-control" />
        </div>

        <div class="form-group">
            <input required="required" placeholder="Enter a brief description here" type="text" name = "description" class="form-control" />
        </div>

        <div class="form-group">
            <textarea name='content' class="form-control">Enter content of the article here</textarea>
        </div>
        <input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
    </form>

@endsection
