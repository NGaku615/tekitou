@extends('layout')

@section('content')
    <h1>paiza bbs</h1>
    <p>{{$message}}</p>
    <form action="{{ route('article.store')}} " method="POST">
        @csrf
        <div class="form-group">
            <label for='content'>Content:</label>
            <input type='text' name='content' id='content'>
        </div>
        <div class="form-group">
            <label for='user_name'>Name:</label>
            <input type='text' name='user_name' id='user_name'>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">作成する</button>
            <a href={{ route('article.list') }}>一覧に戻る</a>
        </div>
    </form>
@endsection