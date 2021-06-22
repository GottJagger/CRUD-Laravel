<h1>{{ $modo }} Empleado</h1>
<label for="nombre">Nombre personal</label>
<br>
<input type="text" name="nombre" id="nombre" value="{{ isset($usuarios->nombre)?$usuarios->nombre:'' }}">
<br>
<label for="nombreUsuario">Nombre de Usuario</label>
<br>
<input type="text" name="nombreUsuario" id="nombreUsuario" value="{{ isset($usuarios->nombreUsuario)?$usuarios->nombreUsuario:'' }}">
<br>
<label for="contraseña">contraseña</label>
<br>
<input type="password" name="contraseña" id="contraseña">
<br>
<button type="submit">{{ $modo }} datos</button>

<br>

<a href="{{ url('usuarios/') }}">regresar</a>
