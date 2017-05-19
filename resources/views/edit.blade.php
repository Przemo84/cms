<!DOCTYPE html>
<html>
<title>Articles - Laravel</title>
<head>

</head>
<body>
<header><h2>List of articles</h2></header>
<div class="container">
    <div class="tab-content">
      <form method="POST" action="../">
          {{csrf_field()}}
          <label>Edit Title:</label>
          <input type="text" name="title">
          <br/>
          <label>Edit Content:</label>
          <input type="text" name="content">
          <br/>
          <input type="submit" value="Save">
          <hr>
      </form>
    </div>

</div>
</body>
</html>