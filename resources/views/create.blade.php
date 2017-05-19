@extends('layout')

@section('content')

    <p><strong>Create your article:</strong></p>
    <form method="POST" action="articles">
        {{csrf_field()}}

        <label>Title:</label>
            <input type="text" name="title">

        <label>Content:</label>
            <input type="text" name="content">

        <input type="submit" value="Save" >
    </form>

@endsection