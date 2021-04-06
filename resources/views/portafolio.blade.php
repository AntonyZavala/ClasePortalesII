@extends('plantilla')


@section('Contenido')
<h1> Portafolio</h1>
<ul>
    @foreach ($portafolio as $portafolioItem)
    <li>{{$portafolioItem['title']}}</li>
    <li>{{$portafolioItem->title}}{{$portafolioItem->description}}{{$portafolioItem->create_at}}</li>
    @endforeach
</ul>

@endsection

@section('titulo', 'Portafolio')

