@extends('plantilla')
@section('titulo', 'Crear')
@section('Contenido')
 <h1>Crear Proyecto</h1>
 <form method="post" action = {{ route('Portafolio.store')}}>
    @csrf
    <label>
        titulo del proyecto <br>
        <input type="text" name="title">
    </label>
    <br>
    <label>
        Descripcion del proyecto <br>
        <input type="text" name="description">
    </label>
    <br>
    <button>Guardar</button>
</form>
@endsection
