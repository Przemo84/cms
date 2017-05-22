<!DOCTYPE html>
<html>
<title>Articles - Laravel</title>
<head>

</head>
<body>
<header><h2>List of articles</h2></header>
<div class="container">
    <div class="tab-content">
      <form method="POST" action="{{ route('articles_update', ['id' => $article->id])  }}">
          {{csrf_field()}}
          {{    method_field('PUT')}}

          <label>Edit Title:</label>
          <input type="text" name="title" value="{{$article->title}}">
          <br/>
          <label>Edit Content:</label>
          <input type="text" name="content" value="{{$article->content}}">
          <br/>
          <input type="submit" value="Save">
          <hr>
      </form>
    </div>

</div>
</body>
</html>