@extends('layout')

@section('content')

    <h3><strong>Title:</strong></h3>
        {{$article->title}} <br/>
    <h3><strong>Content:</strong></h3>
        {{$article->content}}<br/><br/>

    <form action=" {{ '../articles' }} "> {{--TODO poprawić action na route--}}
        <button type="submit">Back to list</button>
        <hr><hr>
    </form>

    <br/>
    <div>
        <form method="POST" action="{{route('store_comment', ['id' =>$article->id]) }}">
            {{csrf_field()}}
            <h3>Comment this article!</h3>
            <label>Your name:</label>
            <input type="text" name="username" >
            <br/>
            <label>Make your comment:</label>
            <input type="text" name="comment">
            <br/>
            <input type="submit" value="Comment!">
            <hr>
        </form>
    </div>
    <hr>

    <div class="tab-content">
        <h3>Your comments:</h3>
        @foreach($comments as $comment)
            <td> {{$comment->username}} , <strong>{{$comment->created_at->diffForHumans()}}</strong></td> <br/>
            <td> {{$comment->comment}}</td><br/><br/>

        @endforeach
    </div>

    <hr>
@endsection