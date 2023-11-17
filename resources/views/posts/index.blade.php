<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ( $posts as $post )
          <div style="border: 1px solid #ccc; margin: 10px;">
                <p> title: {{ $post->title }} </p>
                <p> body: {{ $post->body }} </p>
          </div>
    @endforeach
</body>
</html>