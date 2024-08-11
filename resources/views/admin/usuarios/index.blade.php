@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col">
    <h2>Lista de Usuarios</h2>
    <hr>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card card-outline card-primary ">
      <div class="card-header">
        <h3 class="card-title">Datos registrados</h3>
        <div class="card-tools">
          <a href="{{ url('admin/usuarios/create') }}" class="btn btn-primary mx-4 mt-1"><i class="fa fa-plus"></i> Nuevo usuario</a>
        </div>
      </div>




      <div class="card-body">

        <table class="table table-responsive-sm table-sm table-bordered table-hover table-striped">
          <thead>
            <tr>
              <th><center>Nro</center></th>
              <th>Nombre</th>
              <th>Email</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>

            @php 
            $contador=0;
            @endphp   

              @foreach($usuariossA as $usuario)
                @php  $contador++; @endphp 
                <tr>
                <td align="center">{{ $contador }}</td>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->email }}</td>
                <td align="center">
                  <div class="btn-group">
                    <a href=" {{ route('admin.usuarios.show', $usuario->id ) }} " type="button" class="btn btn-info btn-sm " title="ver información del usuario"><i class="fa fa-eye"></i></a>                    
                    <a href=" {{ route('admin.usuarios.edit', $usuario->id) }} " type="button" class="btn btn-primary btn-sm " title="Editar información del usuario" ><i class="fa fa-pencil-alt"></i></a>                    
                    <a href=" {{ route('admin.usuarios.delete', $usuario->id) }}" type="button" class="btn btn-danger btn-sm" title="Eliminar usuario" ><i class="fa fa-trash-alt"></i></a>
                                     
                  </div>
                </td>
                </tr>
              @endforeach
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>

@endsection