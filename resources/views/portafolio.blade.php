@extends('Plantilla')

@section('Contenido')
    <h1>Portafolio</h1>
    <ul>
    @foreach($portafolio as $portafolioItem)
    {{$portafolioItem['titlte']}}

    @endforeach
    </ul>
@endsection


@section('Titulo', 'Portafolio')


