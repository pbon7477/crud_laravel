@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col">
    <h2>Información del usuario</h2>
    <hr>
  </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h4>Datos registrados:</h4>
            </div>
            <div class="card-body">


           
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nombre">Nombre de usuario:</label>
                            <input type="text" class="form-control" value="{{ $usuario->name }}" disabled >   
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control"  value=" {{ $usuario->email }} " disabled>                          

                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <a href="{{ url('/admin/usuarios') }}" class="btn btn-secondary">Volver </a>
                            <bu
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </div>
</div>

@endsection