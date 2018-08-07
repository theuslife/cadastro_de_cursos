@extends('layout.layout')

@section('titulo', 'Tela inicial do Crud')

@section('conteudo')
<div class="container">
    <h1 class="h1 text-center text-white">Cursos</h1>
    <div class="row">
        @foreach($cursos as $curso)
        <div class="card mx-auto text-white bg-success" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset($curso->imagem) }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $curso->titulo }}</h5>
                <p class="card-text">{{ $curso->descricao }}</p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection