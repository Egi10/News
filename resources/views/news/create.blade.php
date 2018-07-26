<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>News Feedback</title>
</head>

<body>
  <div class="container">
    <h2>Fill Your News Honestly</h2>
    <p>Because Honesty Is Part Of The Priest</p>
    <form action="/news" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" placeholder="Title" class="form-control">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" rows="8" cols="80" placeholder="Description" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control" accept="image/*">
      </div>

      {{ csrf_field() }}

      <button type="submit" name="submit" class="btn btn-default">Add News</button>
    </form>
  </div>
</body>

</html>
