@extends('layout')

@section('content')
    <h1>paiza bbs</h1>
    <p>{{$message}}</p>
    <form action="{{ route('article.update',$article->id)}} " method="POST">
        @csrf
        <div class="form-group">
            <label for='content'>Content:</label>
            <input type='text' name='content' id='content' value="{{ $article->content }}">
        </div>
        <div class="form-group">
            <label for='user_name'>Name:</label>
            <input type='text' name='user_name' id='user_name' value="{{ $article->user_name }}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">保存する</button>
            <a href={{ route('article.show', ['id' => $article->id]) }}>戻る</a>
        </div>
    </form>
@endsection