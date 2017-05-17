<!DOCTYPE html>
<html>
<title>Articles - Laravel</title>
<head>

</head>
<body>
<header><h2>List of articles</h2></header>
<div class="container">
    <div class="tab-content">
        {{$article->id}}
        {{$article->title}}
        {{$article->content}}
    </div>

</div>
</body>
</html>