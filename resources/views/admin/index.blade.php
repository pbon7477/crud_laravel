@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col">
    <h2>Principal</h2>
  </div>
</div>
<hr>

<div class="row">
<div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                @php
                $contador_de_usuarios = 0;
                @endphp

                @foreach ($usuarios as $usuario)
                  @php 
                  $contador_de_usuarios++;
                  @endphp
                
                @endforeach

                <h3>{{ $contador_de_usuarios }}</h3>

                <p>Usuarios registrados</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="{{ route('admin.usuarios.index') }}" class="small-box-footer">
                Más información <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
</div>

@endsection