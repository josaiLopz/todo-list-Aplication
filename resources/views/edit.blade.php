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
            <form action="{{route('usuario.update',$usuario->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <h4>Formulario de editar de datos de usuario </h4>
                    <input class="controls" type="text" name="nombre" id="nombre" value="{{$usuario->nombre}}">
                    <input class="controls" type="text" name="descripcion" id="descripcion" value="{{$usuario->descripcion}}">
                    <input class="controls" type="text" name="nombre_usuario" id="nombre_usuario" value="{{$usuario->nombre_usuario}}">
                    <input class="controls" type="date" name="fecha_inicio" id="fecha_inicio" value="{{$usuario->fecha_inicio}}">
                    <input class="controls" type="date" name="fecha_vencimiento" id="fecha_vencimiento" value="{{$usuario->fecha_vencimiento}}">
                    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
                    <input class="botons" type="submit" value="Enviar">
                     <a href="javascript:history.back()">Ir al listado</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>