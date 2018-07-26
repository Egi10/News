<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Update Feedback</title>
</head>

<body>
  <div class="container">
    <h2>Update Your News Right</h2>
    <p>Because Honesty Is Part Of The Priest</p>
    <form action="/news/{{ $news->id }}" method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $news->title }}" class="form-control">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" rows="8" cols="80" class="form-control">{{ $news->description}}</textarea>
      </div>
      <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control" accept="image/*">
      </div>

      <div class="form-group">
        <img width="20%" height="20%" src="{{ url('storage/'.$news->image) }}">
      </div>

      {{ csrf_field() }}

      <button type="submit" name="submit" class="btn btn-default">Update News</button>

      <input type="hidden" name="_method" value="PUT">
    </form>
  </div>
</body>

</html>
