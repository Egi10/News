<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>See News</title>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>List of News You Have Entered</h2>
    <p>Thank You for Incorporating News, Hopefully The News You Put Not Lying</p>

    <a href="writenews">Add News Data</a>
    <p></p>

    <table>
      <tr>
        <th><center>No</center></th>
        <th><center>Title</center></th>
        <th><center>Description</center></th>
        <th width="300px"><center>Image</center></th>
        <th colspan="2"><center>Action</center></th>
      </tr>

      @php ($number = 1)

      @foreach ($showall as $show)
      <tr>
        <td>{{ $number++ }}</td>
        <td>{{ $show->title }}</td>
        <td>{{ $show->description }}</td>
        <td>
          <center><img width="40%" height="20%" src="{{ url('storage/'.$show->image) }}"></center>
        </td>
        <td><a href="/news/{{ $show->id }}">Delete</a></td>
        <td><a href="/news/{{ $show->id }}/update">Update</a></td>
      </tr>
      @endforeach
    </table>
  </div>
</body>

</html>
