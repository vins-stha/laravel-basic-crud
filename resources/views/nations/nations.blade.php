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
    }
    li a {
        text-decoration: none;

    }
    a:hover {
        text-decoration: underline;
    }
</style>
</head>
{{session('message')}}
<div><h1>Nations </h1>$

    <table class=" table table-bordered table-striped">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Population</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Action</th>

        </tr>
        @foreach($nations as $nation)
            <tr>
                <td>{{$nation['id'] }}</td>
                <td>{{$nation['name'] }}</td>
                <td>{{$nation['population'] }}</td>
                <td>{{$nation['created_at'] }}</td>
                <td>{{$nation['updated_at'] }}</td>
                <td>
                    <li> <a href="/nations/edit/{{$nation->id}}">Edit</a></li>
                    <li><a href="/nations/delete/{{$nation->id}}">Delete </a></li>
                    <li>View</li>
                </td>

            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
