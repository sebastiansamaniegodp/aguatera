@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Gestion de ciudades</h1>
@stop

@section('content')
    <p>Lista de ciudades.</p>
    <table class=""> 
        <thead>
            <tr>
            <th>ID</th>
            <th>Ciudad</th>
            <th> - </th>
            </tr>
        </thead>
        <tbody>
        @foreach($ciudades as $c)
        <tr>
        <td>{{$c->id}}</td>
        <td>{{$c->nombre}}</td>
        <td>Editar</Td>
        </tr>
        <tr>
        @endforeach
     </tbody>
    </table> 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
