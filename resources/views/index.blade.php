@extends('layouts.plantilla')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<style>
.bar {
    background: #538CC8;
    width: 100%;
    height: 40px; 
    -moz-border-radius: 100px 100px 100px 100px;
    -webkit-border-radius: 100px 100px 100px 100px;
    border-radius: 100px 100px 100px 100px;
}
.bar-first{
    background: linear-gradient(to right, #005FB0, #54CA4E);
    width: 100%;
    height: 85px;
    margin-bottom: 25px;
}
.datas{
    border-style:groove;
    width: 98%; 
    -moz-border-radius: 20px 20px 20px 20px;
    -webkit-border-radius: 20px 20px 20px 20px;
    border-radius: 20px 20px 20px 20px;
}
.search{
    overflow: hidden;
    vertical-align: middle;
    white-space: nowrap;
    margin-top: 15px;
}
.type{
    color: #fff;
}
.search input#search{
  width: 500px;
  height: 50px;
  background: #4F594C;
  border: none;
  font-size: 10pt;
  float: left;
  color: #fff;
  padding-left: 15px;
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
}
.select {
    width: 100px;
    height: 50px;
    background: #8CC63F;
    border: none;
    font-size: 10pt;
    float: left;
    color: #fff;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.select-2 {
    width: 200px;
    height: 35px;
    border: none;
    font-size: 10pt;
    float: left;
    color: #fff;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
option {
    text-align:center;
}
.abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
}
.ibtn {
  background-color: transparent;
  border: none;
  color: #555;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}
.btn-add {
    width: 40px;
    height: 40px;
    background: #CCD0D3;
    border: none;
    font-size: 10pt;
    float: left;
    color: #555;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.btn-search {
    width: 50px;
    height: 50px;
    background: #4F594C;
    border: none;
    font-size: 13pt;
    float: left;
    color: #fff;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.fond-values {
    height: 20px;
    background: #CCD0D3;
    border: none;
    font-size: 11pt;
    float: left;
    color: #000;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.fond-values-lg {
    height: 60px;
    background: #CCD0D3;
    border: none;
    font-size: 11pt;
    font-style: italic;
    float: left;
    color: #555;
    -webkit-border-radius: 10PX;
    -moz-border-radius: 10PX;
    border-radius: 10PX;
}
.fond-values-md {
    height: 40px;
    background: #CCD0D3;
    border: none;
    font-size: 11pt;
    font-style: italic;
    float: left;
    color: #555;
    -webkit-border-radius: 10PX;
    -moz-border-radius: 10PX;
    border-radius: 10PX;
}
i {
    color: #555;
}
.full-search{
    background: #4F594C;
    height: 50px; 
    -moz-border-radius: 100px 100px 100px 100px;
    -webkit-border-radius: 100px 100px 100px 100px;
    border-radius: 100px 100px 100px 100px;
}
.negrita {
    font-weight: bold;
    color: #fff;
    font-style: italic;
}
.negrita-2 {
    font-weight: bold;
    font-size: 11pt;
}
.Pendiente{
    background: #538CC8;
}
.Progreso{
    background: #FF8A00;
}
.Completo{
    background: #8CC63F;
}
</style>


<!-- vista general para hacer consulta de la tabla servicios garantia usando una variable definida en clientecontroller -->

@section('contenido')
<div class="bar-first abs-center row">
    <div class="col-sm-3 col-md-2">
        <h5 class="type">Gestion todo-list</h5>
    </div>
    
    <div class="col-sm-3 col-md-8"></div>
</div>
<div class="container-fluid">
    <div class="row abs-center" style="margin-bottom: 25px;">
        <div class="col-sm-9 col-md-11">
            <div class="bar abs-center">
                <div class="col-sm-5 col-md-6 negrita">Lista de datos de usuarios</div>
    

            </div>
        </div>
        <div class="col-sm-3 col-md-1">
            <a href="{{route('usuario.create')}}" class="btn-add abs-center"><span class="bi bi-plus-circle-fill"></a>
        </div>
    </div>
    <div class="row abs-center">
    @foreach ($usuarios as $usuario)
        <div class="datas row">
            <div class="col-sm-3 col-md-4" style="margin-top: 5px;">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <p class="negrita-2">Nombre: {{$usuario->nombre}}</p>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <p class=" bi bi-exclamation-triangle-fill negrita-2" >Descripcion</p>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 5px;">
                        <div class="col-sm-6 col-md-6 fond-values">
                            <i class="bi bi-person" title="Nombre">  {{$usuario->nombre}}</i>
                        </div>

                        <div class="col-sm-20 col-md-6 fond-values">
                            <i class="bi bi-exclamation-triangle-fill" title="descripcion">  {{$usuario->descripcion}}</i>
                        </div>
                        
                    </div>
                    <div class="row" style="margin-bottom: 0px;">
                        <div class="col-sm-6 col-md-6 fond-values">
                            <i class="bi bi-person" title="nobre de usuario">  {{$usuario->nombre_usuario}}</i>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3" style="margin-top: 5px;">
                <p class="negrita-2">Fecha Inicio</p>                
                <div class="row">
                    <div class="col-sm-12 col-md-10 fond-values">
                        <i class="bi bi-calendar" Title="Area">  {{$usuario->fecha_inicio}}</i>
                    </div>
                </div>
                
            </div>
        <div class="col-sm-2 col-md-2" style="margin-top: 5px;">
        <p class="negrita-2">Fecha Vencimiento</p> 
            <div class="row" style="margin-top: 5px;">
                <div class="col-sm-12 col-md-12 fond-values">
                <i class="bi bi-calendar" title="dependencia">  {{$usuario->fecha_vencimiento}}</i>
                </div>
            </div>
        </div>
        
            <div class="col-sm-3 col-md-3 abs-center">

                <!-- links para hacer las funciones correspondientes definidas en web.php que luego lo mandara a servicioController -->
              
                <form action="{{route('usuario.destroy',$usuario->id)}}" method="POST">
                    <button type="reset" onclick="toggleHidden('#info-{{$usuario->id}}')" class="ibtn"><span class="bi bi-caret-down" title="Mas detalles"></button>
                    <a href="{{route('usuario.edit',$usuario->id)}}" class="bi bi-pencil-square btn-sm"></a>
                    @csrf
                    @method('DELETE')
                    <button  type="submit" class="ibtn"><span class="bi bi-trash"></button>

                </form>
            </div>
        </div>
        <div id="info-{{$usuario->id}}" class="datas row" hidden>
            <div class="col-sm-3 col-md-4" style="margin-left:450px; margin-top: 15px; margin-bottom: 5px;">
                <div class="col">
                    <center>
                        <i class="bi bi-ticket-detailed">  Descripci&oacute;n detallada</i>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 fond-values-lg">
                                {{$usuario->descripcion}}
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            
            
        </div>
        @endforeach

          <script>
        function toggleHidden(selector) {
            console.log(selector);
            element = document.querySelector(selector);
            element.hidden = element.hidden ? false : true;
        }
        </script>
    </div>
</div>

@endsection