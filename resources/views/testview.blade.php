<!DOCTYPE html>
<html>
<title>Articles - Laravel</title>
<head>

</head>
<body>
<header><h2>Szablon tylko do testowania</h2></header>
<div class="container" style="width: 1000px;">
        {{--<p>Hello, {{$name}}</p>--}}
        {{--<p>Twoj wiek to: {{$age}}</p>--}}
        {{--<p>Pierwszy kontent w bazie to: <br/> {{$content}}</p>--}}

        @foreach($articleRepository as $article)
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

        @endforeach
</div>
</body>
</html>