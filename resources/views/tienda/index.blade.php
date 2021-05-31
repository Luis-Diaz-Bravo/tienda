@extends('layout.app')

@section('content')
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>DESCRIPCION</th>
                <th>PRECIO</th>
                <th>EXISTENCIA</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
                <th>{{$producto -> nombre}}</th>
                <th>{{$producto -> descripcion}}</th>
                <th>{{$producto -> precio}}</th>
                <th>{{$producto -> existencia}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection



