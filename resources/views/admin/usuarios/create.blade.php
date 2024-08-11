@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col">
    <h2>Crear nuevo usuario</h2>
    <hr>
  </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card card-outline card-success">
            <div class="card-header">
                <h4>Ingrese los datos:</h4>
            </div>
            <div class="card-body">

            <form action=" {{ url('/admin/usuarios') }} " method="post">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nombre">Nombre de usuario:</label>
                            <input type="text" class="form-control" value="{{ old('name') }}" name="name">
                            
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
                            <input type="email" class="form-control" name="email" value=" {{ old('email') }} ">

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
                            <button type="submit" class="btn btn-success"> <i class="fa fa-user"></i>  Registrar</button>
                        </div>
                    </div>
                </div>



            </form>

            </div>
        </div>
    </div>
</div>

@endsection