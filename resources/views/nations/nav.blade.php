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
    <style>
        li {
            list-style: none;
            display: inline-block;
            width: 100px;
            padding: 5px;
            background: #CEDCED;
        }
        li a {
            text-decoration: none;

        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<nav>
    <li>
        <a href="nations/create">New</a>
    </li>
    <li>
        <a href="/nations">Nations</a>
    </li>
    <li>
        <a href="nations/create">Search</a>
    </li>
</nav>
