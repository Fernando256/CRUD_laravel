<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('user.store')}}" method="post">
        @csrf
        <label for="">Nome do usuario:</label>
        <input type="text" name="name">

        <label for="">Email do usuario</label>
        <input type="email" name="email">

        <label for="">Senha do usuario</label>
        <input type="password" name="password">

        <input type="submit" value="Cadastrar usuario">
    </form>
    
</body>
</html>