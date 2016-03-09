@extends('layouts.admin')

@section('content')
    {!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
        @include('usuario.forms.usr')
        {!!Form::submit('Registrar', ['class'=>'btn btn-success'])!!}
    {!!Form::close()!!}
@stop