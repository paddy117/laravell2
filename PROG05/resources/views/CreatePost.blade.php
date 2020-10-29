<?php
?>
    <!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">





</head>

<body>
<form  method="post" >
    @csrf
{{--    title form--}}
    <div class="form group">
        <label for="title">title</label>
        <input id="title" type="text" name="title" >
            </div>

{{--    description form--}}
    <div class="form group">
        <label for="description">description</label>
        <input id="description" type="text" name="description" >
    </div>

{{--    image form--}}
    <div class="form group">
        <label for="image">image</label>
        <input id="image" type="text    " name="image" >
    </div>

{{--    id--}}
    <div class="form group">
        <label for="category_id">id</label>
        <select id="catergory_id" name="category_id">
            <option value="1">Eerste wereldoorlog</option>
            <option value="2">Tweede wereld oorlog</option>
            <option value="3">Koude oorlog</option>
            <option value="4">modern</option>
        </select>
    </div>


    <button>foto posten</button>


</form>
</body>
</html>
