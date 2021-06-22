<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Usuario</title>
</head>

<body>
    <div>
        <form action="{{ url('/usuarios') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('usuarios.form',['modo'=>'crear'])
        </form>
    </div>
</body>

</html>
