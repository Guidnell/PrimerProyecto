@extends('layouts.base')
@section('titulopagina','Empresa E-Commerce')
@push('css')
    <style>
        .fondo {
            background: #302886;
        }

        .img-responsive{
            width: 100%;
            height: 100%;
        }
  </style>
@endpush

@section('titulo')
    Bienvenido a la página de EC
@endsection


@section('subtitulo')
    Explorando las oportunidades con Laravel 12
@endsection


@section('link1','Active')
@section("contenido_cuerpo")
  <a href="{{route('pagina.create')}}">Nueva página</a>
  <!-- Genero un listado de los elementos obtenidos de la consulta -->
  <ul>
    @foreach($paginas as $pagina)
        <li>
            <a href='{{route("pagina.detalle",$pagina->id)}}'>
                {{ $pagina->name }}
            </a>
        </li>
    @endforeach
  </ul>
  {{ $paginas->links()}}
@endsection
@section("Autor")
    {{$nombre}}
@endsection
@section("actividad",$actividad)
@section("texto_ejemplo")
    {{$texto_ejemplo}}
@endsection
@section("titulo_modal","Detalle usuario")