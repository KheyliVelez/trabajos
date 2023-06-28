@extends('layouts.plantilla')
@section('index')

<h1>EJERCIOCIOS 2502319</h1> 
<form action="{{route('ejercicios.store')}}" method="POST">

    @csrf


     <label for="id">id:</label>
    <input type="number" id="id" name="id"><br><br>

    <label for="name">name:</label>
    <input type="text" id="nombre" name="name"><br><br>

    <label for="descripción">descripción:</label>
    <input type="text" id="descripción" name="descripción"><br><br>

    <label for="precio">precio:</label>
    <input type="randomNumber" id="precio" name="precio"><br><br>

    <label for="existencias">existencias:</label>
    <input type="randomNumber" id="existencias" name="existencias"><br><br>

    <label for="proveedor">proveedor:</label>
    <input type="randomElement" id="proveedor" name="proveedor"><br><br>

    <input type="submit" value="Enviar">
  </form>
@endsection