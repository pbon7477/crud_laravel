@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col">
        <h2>¿Confirma que desea eliminar al usuario  <b>{{ $usuario->name}}</b> ?</h2>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h4>Información del usuario:</h4>
            </div>

            <form action="{{ route('admin.usuarios.destroy', $usuario->id) }}" method="post">
                @csrf
                @method('DELETE')
                
                <div class="card-body">



                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nombre">Nombre de usuario:</label>
                                <input type="text" class="form-control" value="{{ $usuario->name }}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" value=" {{ $usuario->email }} " disabled>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('/admin/usuarios') }}" class="btn btn-secondary">Volver </a>
                                <button  type="submit" class="btn btn-danger"><i class="fa fa-trash-alt"></i> Eliminar usuario</button>
                            </div>
                        </div>
                    </div>





                </div>
            </form>

        </div>
    </div>
</div>

@endsection