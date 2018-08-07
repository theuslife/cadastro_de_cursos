<div class="form-group">
    <label for="exampleInputEmail1">Título</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Título" name="titulo" value="{{ isset($registro->titulo) ? $registro->titulo: ''}} " >
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Descrição</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Descrição" name="descricao" value="{{ isset($registro->descricao) ? $registro->descricao: ''}} ">
</div>

<div class="form-group">
    <label for="exampleFormControlFile1">Imagem</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagem">
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Valor</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Valor" name="valor" value="{{ isset($registro->valor) ? $registro->valor: ''}} ">
</div>

@if(isset($registro->imagem))
<div class="form-group">
    <img src="{{ asset($registro->imagem) }}" class="img-fluid">
</div>
@endif

<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="publicado" value="true" {{ isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked': ''}}>
    <label class="form-check-label" for="exampleCheck1">Publicado</label>
</div>
