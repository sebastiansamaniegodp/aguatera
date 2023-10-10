@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Gestion de ciudades</h1>
@stop

@section('content')
    @if($m != "")
        <br>{{$m}}<br>
    @endif

    @foreach ($ciudades as $c)
        {{$c->id}}
        {{$c->nombre}}
        <form method="post" action='eliminarciudad/{{$c->id}}'>
            @csrf
            @method('DELETE')
            <button type="submit">Borrar</Button>
        </form>
        <br>
    @endforeach
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
