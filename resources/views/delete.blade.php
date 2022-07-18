
<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$usuario->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="{{route('usuario.destroy',$usuario->id)}}" method="post">
        @csrf
        @method('DELETE')
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Eliminacion de registros</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Deseas eliminar el registro {{$usuario->nombre."".$usuario->fecha_inicio}}      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
      </div>
    </div>
</form>

  </div>
</div>