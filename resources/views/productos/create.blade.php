@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2>Nueva Publicación</h2>
        </div>
        <div class="row justify-content-center">
            <form action="{{ url('/productos/create')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" id="title">
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="content" id="content" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Precio Unidad</label>
                        <input type="number">
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number">
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" id="image">
                            <label for="customFile">Choose Image</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit">CREATE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection