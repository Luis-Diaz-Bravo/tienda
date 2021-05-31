@extends('layouts.app')

@section('content')

        
@foreach ($productos as $producto)
<div class="list-group">
    <div class="card col-md-8 mx-auto">
    <a href="#" class=" list-group-item-action flex-column align-items-start">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{$producto->Nombre}} </h5>
        <small class="text-muted">{{$producto->Precio_unidad}}</small>
        
      </div>
      <p class="mb-1 ">{{$producto->descripcion}} </p>
      
    </a>
  </div>
  
  </div>
  
  
  @endforeach
@endsection