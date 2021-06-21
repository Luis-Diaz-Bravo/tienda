@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <h2>Nuevo Producto</h2>
    </div>
    <div class = "row justify-content-center">
        @if (count($errors) > 0)
            <div class="row alert alert-danger">
                <p>¡Opss! Hubo un problema con los datos proporcionados</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ url('productos') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nombre" class="col-sm12 col-form-label">
                    {{__('Name')}}
                </label>
                <div class="col-sm-12">
                    <input type="text" id="nombre" name="nombre" class="form-control  {{$errors->has('nombre') ? 'is-invalid': ''}}" value="{{ old('nombre') }}" autofocus>
                    @if ($errors->has('nombre'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="descripcion" class="col-sm-12 col-form-label">{{__('Description')}}</label>
                <div class= "col-sm-12">
                    <textarea name="descripcion" id="descripcion" rows="3" class="form-control{{$errors->has('descripcion') ? ' is-invalid' : ''}}">{{old('descripcion')}}</textarea>
                    @if ($errors->has('descripcion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('descripcion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="precio_unidad" class="col-sm12 col-form-label">
                        {{__('Precio')}}
                    </label>
                    <div class="col-sm-12">
                        <input type="number" id="precio_unidad" name="precio_unidad" class="form-control  {{$errors->has('precio_unidad') ? 'is-invalid': ''}}" value="{{ old('precio_unidad') }}" step=any autofocus>
                        @if ($errors->has('precio_unidad'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('precio_unidad') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="existencia" class="col-sm12 col-form-label">
                        {{__('Existencia (stock)')}}
                    </label>
                    <div class="col-sm-12">
                        <input type="number" id="existencia" name="existencia" class="form-control  {{$errors->has('existencia') ? 'is-invalid': ''}}" value="{{ old('existencia') }}" autofocus>
                        @if ($errors->has('existencia'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('existencia') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <div class="custom-file">
                        <input type="file" id="imagen" name="imagen" class="custom-file-input {{ $errors->has('imagen') ? 'is-invalid' : ''}}">
                        <label for="customFile" class="custom-file-label">{{ __('Choose imagen') }}</label>
                        @if ($errors->has('imagen'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('imagen') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">
                        {{__('Create')}}
                    </button>
                </div>
            </div>
        </form>

    </div>

</div>

   

@endsection
