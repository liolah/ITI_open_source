<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Designs</title>
</head>
<body>
  <table border="1">
    @foreach ($posts as $post)
      <tr><td>{{$post->id}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->content}}</td></tr>
    @endforeach
  </table>
</body>
</html>