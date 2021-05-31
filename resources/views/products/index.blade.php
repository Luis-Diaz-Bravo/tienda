@extends('layouts.app')


@section ('content')

<h1>LISTADO DE PRODUCTOS</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Cantidad disponible</th>
      </tr>
    </thead>
@foreach ($productos as $product)
<tbody>
    <tr>
      <th scope="row">{{ $product->id}}</th>
      <td>{{$product->nombre}}</td>
      <td>{{$product->precio_unidad</td>
      <td>{{product->existencia}}</td>
    </tr>
    
@endforeach
</tbody>

