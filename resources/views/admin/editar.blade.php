@extends('layout.layout')

@section('conteudo')

    <div class="container text-white">
        <form action="{{ route('admin.cursos.atualizar', $registro->id) }}" enctype="multipart/form-data" method="POST">
    
            <input type="hidden" name="_method" value="put">
    
            {{ csrf_field() }}
    
            @include('form.form')
    
            <button type="submit" class="btn btn-primary">Editar</button>
    
        </form>
    </div>

@endsection