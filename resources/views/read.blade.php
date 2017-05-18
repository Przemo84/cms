@extends('layout')

@section('content')

    <p><strong>Title:</strong></p>
        {{$article->title}} <br/>
    <p><strong>Content:</strong>:</p>
        {{$article->content}}<br/><br/>
    <form action=" {{ '../articles' }} ">
        <button type="submit">Back to list</button>
    </form>
    <br/><br/><br/>
    <div class="tab-content">
        <h3>Your comments:</h3>
        @foreach($comments as $comment)
            <td> {{$comment->username}} </td> <br/>
            <td> {{$comment->comment}}</td><br/><br/>
        @endforeach
    </div>
@endsection