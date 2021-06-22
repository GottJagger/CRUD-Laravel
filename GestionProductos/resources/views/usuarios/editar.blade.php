<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar Empleados</title>
</head>

<body>

    <form action="{{ url('/usuarios/'.$usuarios->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        @include('usuarios.form',['modo'=>'editar'])
    </form>
</body>

</html>
