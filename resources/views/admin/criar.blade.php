@extends('layout.layout')

@section('conteudo')
<div class="container text-white">
    <form action="{{ route('admin.cursos.salvar') }}" method="POST" enctype="multipart/form-data">

        {{ csrf_field() }}
        
        @include('form.form')

        <button type="submit" class="btn btn-primary">Adicionar novo Curso</button>

    </form>
</div>
@endsection