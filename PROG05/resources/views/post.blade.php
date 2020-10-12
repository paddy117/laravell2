<?php
?>

    <!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>{{ $post->title }}</title>


</head>

<body>
<p>{{ $post->title }}</p>
<p>{{ $post->description }}</p>
<img src="{{ $post->image}}">
{{--<p>{{ $catagory->title}}</p>--}}
<a href="{{route('page1')}}">Page1</a>
</body>
</html>



