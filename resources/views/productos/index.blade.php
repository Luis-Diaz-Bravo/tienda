@extends('layouts.app')

@section('content')

    <table class="table">
    <thead>
        <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Precio/Unidad</th>
        <th scope="col">extistencia</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <th>{{$producto -> nombre}}</th>
            <th>{{$producto -> descripcion}}</th>
            <th>{{$producto -> precio_unidad}}</th>
            <th>{{$producto -> existencia}}</th>
        </tr>
        
        @endforeach
    </tbody>
    </table>
@endsection