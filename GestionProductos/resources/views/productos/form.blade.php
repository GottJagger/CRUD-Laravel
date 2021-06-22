<h1>{{ $modo }} Producto</h1>
<label for="nombre">Nombre del producto</label>
<br>
<input type="text" name="nombre" id="nombre" value="{{ isset($productos->nombre)?$productos->nombre:'' }}">
<br>
<label for="precio">Precio</label>
<br>
<input type="text" name="precio" id="precio" value="{{ isset($productos->precio)?$productos->precio:''}}">
<br>
<label for="cantidad">Cantidad</label>
<br>
<input type="text" name="cantidad" id="cantidad" value="{{ isset($productos->cantidad)?$productos->cantidad:''}}">
<br>
<button type="submit">{{ $modo }} datos</button>

<br>

<a href="{{ url('productos/') }}">regresar</a>
