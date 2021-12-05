<div>
    <div class="card mx-auto" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$agregar->nombre}}</h5>
          <p class="card-text">{{$agregar->telefono}}</p>
          <button wire:click="eliminar" class="btn btn-danger btn-sm">Confirmar <i class="fa fa-trash" aria-hidden="true"></i></button>
          <a href="{{route('usuarios.index')}}" class="btn btn-primary btn-sm">Cancelar <i class="fa fa-save" aria-hidden="true"></i></a>
        </div>
      </div>
</div>
