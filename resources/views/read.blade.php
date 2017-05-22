@extends('layout')

@section('content')

    <p><strong>Title:</strong></p>
        {{$article->title}} <br/>
    <p><strong>Content:</strong>:</p>
        {{$article->content}}<br/><br/>
    <form action=" {{ '../articles' }} ">
        <button type="submit">Back to list</button>
        <hr>
    </form>
    <br/><br/>
    <div>
        <form method="POST" action="{{route('show_article', ['id' =>$article->id]) }}">
            {{csrf_field()}}

            <label>Your name:</label>
            <input type="text" name="username" >
            <br/>
            <label>Make your comment:</label>
            <input type="text" name="content">
            <br/>
            <input type="submit" value="Comment!">
            <hr>
        </form>
    </div>
    <hr>


    <div class="tab-content">
        <h3>Your comments:</h3>
        @foreach($comments as $comment)
            <td> {{$comment->username}} </td> <br/>
            <td> {{$comment->content}}</td><br/><br/>
        @endforeach
    </div>


    <hr>
@endsection