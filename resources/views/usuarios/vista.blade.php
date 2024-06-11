<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>
    <h1>Hola Usuario</h1>
    {{-- Hacemos un foreach para los usuarios --}}
    @foreach ($usuarios as $usuario)
        <div>
            <h3>
                {{$usuario -> nombre}}
            </h3>
            <br>
            <p>
                {{$usuario -> nombre}}
            </p>
        </div>

    @endforeach
</body>
</html>
