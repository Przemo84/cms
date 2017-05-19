@extends('layout')

@section('content')
    <div class="tab-content">
        <h2>List of articles</h2>
        <h3>Number of articles: {{$count}}</h3>
        <form action="create">
            <input type="submit" value="Create an Article">
            <hr>
        </form>
        <table>
            <thead>
                <tr>
                    <td><strong>ID</strong></td>
                    <td><strong>TITLE</strong></td>
                    <td><strong>CONTENT</strong></td>
                </tr>
            </thead>
            <tbody>
             @foreach($articles as $article)
                 <tr>
                     <td>{{$article->id}}</td>
                     <td>{{$article->title}}</td>
                     <td>{{$article->content}}</td>
                     <td><a href="{{'articles/'.$article->id}}">READ</a></td>
                     <td><a href="{{'articles/edit/'.$article->id}}">EDIT</a></td>
                     <td>
                         <form action="{{'delete/'.$article->id}}">
                            <input type="submit" value="Delete">
                         </form>
                     </td>

                 </tr>
            @endforeach;
            </tbody>
        </table>
        <hr>
    </div>
@endsection

