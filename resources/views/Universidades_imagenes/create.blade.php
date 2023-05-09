@extends('Cruds.master')
@section('contenido_central')
    <h1>Agregar imagen</h1>

    {!! Form::open(['method' => 'POST', 'url' => '/universidades_imagenes', 'files'=>'true']) !!}
    @csrf
    <div class="form-group my-2">
        {!! Form::label('id_universidad', 'Universidad:') !!}
        {!! Form::select('id_universidad', $universidades->pluck('nombre', 'id')->all(), null, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una universidad',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('image', 'Imagen') !!}
        {!! Form::file('imagen', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('status', 'Estatus:') !!}
        {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], null, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una opción',
        ]) !!}
    </div>
    {!! Form::submit('Agregar imagen', ['class' => 'btn btn-success my-2']) !!}
    {!! Form::close() !!}
@endsection()
