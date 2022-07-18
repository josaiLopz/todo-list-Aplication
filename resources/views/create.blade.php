@include('layouts.plantilla')

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <title>Formulario Todo-list</title>
</head>
<body>
  <section class="form-register">
    <form action="{{route('usuario.store')}}" method="POST">
      @csrf
      <h4>Formulario de registro de datos de usuario </h4>
      <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre">
    <input class="controls" type="text" name="descripcion" id="descripcion" placeholder="Descripcion">
    <input class="controls" type="text" name="nombre_usuario" id="nombre_usuario" placeholder="Nombre de usuario">
    <input class="controls" type="date" name="fecha_inicio" id="fecha_inicio" placeholder="Fecha de Inicio">
    <input class="controls" type="date" name="fecha_vencimiento" id="fecha_vencimiento" placeholder="Fecha de Vencimiento">
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    <input class="botons" type="submit" value="Enviar">
    
  </form>
  </section>

</body>
</html>
