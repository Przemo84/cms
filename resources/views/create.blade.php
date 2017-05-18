@extends('layout')

@section('content')

    <p><strong>Create your article:</strong></p>
    <form method="POST" action="articles">
        {{csrf_field()}}

        <label>
            <input type="text" name="title">
        </label>
        <label>
            <input type="text" name="content">
        </label>
        <input type="submit" value="Save">
    </form>

@endsection