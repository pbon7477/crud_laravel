@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col">
    <h2>Editar usuario</h2>
    <hr>
  </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card card-outline card-warning">
            <div class="card-header">
                <h4>Ingrese los datos con cuidado:</h4> 
            </div>
            <div class="card-body">

            <form action="{{ url('admin/usuarios', $usuario->id) }}" method="post">
                @csrf
                @method('PUT')
                
                <!--
                {{ method_field('PUT') }}
                ...O PEDE SER TAMBIEN: 
                @method('PATCH') -->
                
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nombre">Nombre de usuario:</label>
                            <input type="text" class="form-control" value="{{ $usuario->name}}" name="name">
                            
                            @error('name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value=" {{ $usuario->email}} ">

                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" >

                            @error('password')
                            <small class="text-danger"> {{ $message }}</small>
                            @enderror

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="password_confirmation">Confirmar password</label>
                            <input type="password" class="form-control" name="password_confirmation" >                            
                           
                            
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <a href="{{ url('/admin/usuarios') }}" class="btn btn-secondary">Cancelar </a>
                            <button type="submit" class="btn btn-warning"> <i class="fa fa-compact-disc"></i>  Actuallizar usuario</button>
                        </div>
                    </div>
                </div>



            </form>

            </div>
        </div>
    </div>
</div>

@endsection