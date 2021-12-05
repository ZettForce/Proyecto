<div>
    <div class="card mx-auto" style="width: 18rem;">
        <img style="width: 150px; height: 150px;"  class="mx-auto mt-3 card-img-top" 
            src="{{Storage::disk('public')->url($agregar->foto ? $agregar->foto : 'images/usuarios/default.png')}}" alt="Image">
        <div class="text-center card-body">
          <h5 class="card-title ">{{$agregar->nombre}}</h5>
          <span class="card-text"><i class="fa fa-phone-square"></i> Telefono: {{$agregar->telefono}}</span> <br>
          <small class="card-text"><i class="fa fa-home"></i> Direccion: {{$agregar->direccion}}</small>
          <a href="{{route('usuarios.index')}}" class="btn btn-primary d-block"><i class="fa fa-home"></i> Regresar</a>
        </div>
      </div>
</div>
