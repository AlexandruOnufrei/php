<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{-- @isset($user)
        <form action="" method="POST">
            <input type="text" name="name" placeholder="name" value="">
            <input type="text" name="email" placeholder="email" value="">
            <button>Update</button>
        </form>
        <form action="" method="POST">
            <input type="text" name="name" placeholder="name" value="">
            <input type="text" name="email" placeholder="email" value="">
            <button>Create</button>
        </form>
    @endisset --}}



    {{isset($user->name)? "update".$user->name: 'create'}}
    {{-- {{dd($user)}} --}}
    <form action="{{route('welcome.store')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name" value="">
        <input type="text" name="email" placeholder="email" value="">
        <button>Save</button>
    </form>
</body>
</html>