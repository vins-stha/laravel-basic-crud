<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->

</head>
<div><h1>New Nation Entry </h1>
    <form method="post" action="submit">
        @csrf
        <div class="form-group">
            <label for="name">Nation name:</label>
            <input type="text" namclass="form-control" name ="name" id="name">
        </div>
        <div class="form-group">
            <label for="population">Population:</label>
            <input name="population" type="text" class="form-control" id="population">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>



</div>
</body>
</html>
