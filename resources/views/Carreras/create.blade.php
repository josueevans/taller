@extends('Cruds.master')
@section('contenido_central')
    <h1>Crear carrera</h1>

    {!! Form::open(['url'=>'/carreras']) !!}
    <div class="form-group my-2">
        {!! Form::label('nombre', 'Nombre de la carrera') !!}
        {!! Form::text('nombre', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el nombre de la carrera',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('objetivo', 'Objetivo de la carrera') !!}
        {!! Form::text('objetivo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el objetivo de la carrera']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('descripcion', 'Descripción de la carrera') !!}
        {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingresa la descripción de la carrera']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('perfil_ingreso', 'Perfil de ingreso de la carrera') !!}
        {!! Form::text('perfil_ingreso', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el perfil de ingreso de la carrera']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('perfil_egreso', 'Perfil de egreso de la carrera') !!}
        {!! Form::text('perfil_egreso', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el perfil de egreso de la carrera']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('campo_laboral', 'Campo laboral de la carrera') !!}
        {!! Form::text('campo_laboral', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el campo laboral de la carrera']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('tipo', 'Tipo:') !!}
        {!! Form::select('tipo', ['1' => 'Tecnologías e ingenierías', '0' => 'Ciencias'], null, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una opción',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('status', 'Estatus:') !!}
        {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], null, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una opción',
        ]) !!}
    </div>
    {!! Form::submit('Crear Carrera', ['class' => 'btn btn-success my-2']) !!}
    {!! Form::close() !!}
@endsection()
