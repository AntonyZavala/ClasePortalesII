@extends('Plantilla')

@section('Contenido')
    <h1>Portafolio</h1>
    <ul>
    @foreach($portafolio as $portafolioItem)
    <li>{{$portafolioItem['titlte']}}</li>

    @endforeach
    </ul>
@endsection


@section('Titulo', 'Portafolio')
