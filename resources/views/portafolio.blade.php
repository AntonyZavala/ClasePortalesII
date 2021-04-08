@extends('plantilla')


@section('Contenido')
<h1> Portafolio</h1>
<ul>
    @foreach ($portafolio as $portafolioItem)
    <li>{{$portafolioItem['title']}}</li>
    <li>{{$portafolioItem->title}}{{$portafolioItem->description}}{{$portafolioItem->create_at}}</li>
    <li><a href="{{route('portafolio.show', $project)}}">{{ $project->title }}</a></li>
    @endforeach
    <li><a href="{{ route('portafolio.show', $project)}}">nuevo</a>
</ul>

@endsection

@section('titulo', 'Portafolio')

