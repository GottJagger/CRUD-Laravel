<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Lista Empleados</title>
</head>

<body>

    <h1>lista de Empleados</h1>
    <a href="{{ url('usuarios/create') }}">Registro Usuario</a>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>

                <th>id</th>
                <th>nombre</th>
                <th>Nombre Usuario</th>
                <th>Accion</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($usuarios as $usuario)

            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->nombreUsuario }}</td>

                <td>
                    <a href="{{ url('/usuarios/'.$usuario->id.'/edit') }}">
                        Editar
                    </a>
                    <form action="{{ url('/usuarios/'.$usuario->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" onclick="return confirm('Seguro que quieres borrar?')">Borrar</button>
                    </form>
                </td>

            </tr>

            @endforeach
        </tbody>

    </table>
</body>

</html>
