<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Hello</h1>

@foreach ($person as $p)
<table>
    <tr>
        <td>{{$p -> id}}</td>
        <td>{{$p -> name}}</td>
        <td>{{$p -> email}}</td>
        <td><a href="{{route('welcome.edit', $p)}}">Edit</a></td>
    </tr>
</table>
@endforeach

<a href="{{route('welcome.create')}}">Add users</a>

</body>
</html>