<!DOCTYPE html>
<html>
<title>Articles - Laravel</title>
<head>

</head>
<body>
<header><h2>List of articles</h2></header>
<div class="container">
    <div class="tab-content">
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
                     <td><a href="{{'article/'.$article->id}}">READ</a></td>
                     <td><a href="{{'article/edit/'.$article->id}}">EDIT</a></td>
                     <td>
                         <form>
                            <input type="submit" value="Delete">
                         </form>
                     </td>

                 </tr>
            @endforeach;
            </tbody>
        </table>
    </div>

</div>
</body>
</html>