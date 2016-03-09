@extends('layouts.admin')

@section('content')
    {!!Form::model($user,['route'=>['usuario.update', $user->id], 'method'=>'PUT'])!!}
        @include('usuario.forms.usr')
        {!!Form::submit('Editar', ['class'=>'btn btn-success'])!!}
    {!!Form::close()!!}
@stop