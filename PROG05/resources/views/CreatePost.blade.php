<?php
?>
    <!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Create Account</title>




</head>

<body>
<form  method="post" >
    @csrf
    <div class="form group">
        <label for="title">title</label>
        <input id="title" type="text" name="title" >
            </div>

    <div class="form group">
        <label for="description">description</label>
        <input id="description" type="text" name="description" >
    </div>

    <div class="form group">
        <label for="image">image</label>
        <input id="image" type="text    " name="image" >
    </div>

    <div class="form group">
        <label for="category_id">id</label>
        <select id="catergory_id" name="category_id">
            <option value="1">Eerste wereldoorlog</option>
            <option value="2">Tweede wereld oorlog</option>
            <option value="3">Koude oorlog</option>
            <option value="4">modern</option>
        </select>
    {{--        <input type="submit" >--}}
    </div>


    <button>foto posten</button>


</form>
</body>
</html>
