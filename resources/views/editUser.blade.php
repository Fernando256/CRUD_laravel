<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('user.update', ['user' => $user->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome do usuario:</label>
        <input type="text" name="name" value="{{$user->name}}">

        <label for="">Email do usuario</label>
        <input type="email" name="email" value="{{$user->email}}">

        <label for="">Senha do usuario</label>
        <input type="password" name="password">

        <input type="submit" value="Editar usuario">
    </form>
    
</body>
</html>