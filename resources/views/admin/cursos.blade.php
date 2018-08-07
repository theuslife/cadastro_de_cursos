@extends('layout.layout')

@section('titulo', 'Tela inicial do Crud')

@section('conteudo')

<div class="container">
    <h1 class="h1 text-center text-white">Lista de Cursos</h1>
    <div class="container">
        <div class="row">
            <table class="table table-responsive-sm table-light">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descricao</th>
                        <th scope="col">Imagem</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Publicado</th>
                        <th scope="col">Modificações</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($cursos as $curso)
                    <tr>
                        <th scope="row">{{ $curso->id }}</th>
                        <td>{{ $curso->titulo }}</td>
                        <td>{{ $curso->descricao }}</td>
                        <td><img src="{{ asset($curso->imagem) }}" class="img-fluid img" alt="{{ $curso->titulo }}">  </td>
                        <td>{{ $curso->valor }}</td>
                        <td>{{ $curso->publicado }}</td>
                        <a href=""></a>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.cursos.editar', $curso->id) }}">Editar</a> 
                            <a class="btn btn-danger" href={{ route('admin.cursos.delete', $curso->id) }}> Excluir</a>
                        </td>
                        <td>
                    </tr> 
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="row pb-2">
            <a class="btn btn-success mx-auto" href="{{ route('admin.cursos.criar') }}">Criar Novo Curso</a>
        </div>
    </div>
</div>

@endsection