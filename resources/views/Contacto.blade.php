@extends('Plantilla')

@section('Contenido')
    <h1>Contacto</h1>
@endsection

@section('Titulo', 'Contacto')

<input name="nombre" placeholder="Nombre" value=""><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input name="subject" placeholder="Asunto"><br>
    <textarea name="contedino" placeholder="Mensaje"></textarea><br>
    <button>Enviar</button>


