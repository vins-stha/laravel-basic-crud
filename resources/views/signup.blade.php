<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->

    </head>
     <div><h1>User registration </h1>
        <form action="register" method="post">
            {{ @csrf_field() }}
            <input type="text" name="username" placeholder="Username"/>
            <input type="submit" name="submit"/>
        </form>
     </div>
    </body>
</html>
