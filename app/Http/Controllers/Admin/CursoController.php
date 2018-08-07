<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{

    public function index()
    {

        $cursos = Curso::all();
        return view('admin.cursos', compact('cursos'));

    }

    public function criar()
    {
        return view('admin.criar');
    }

    public function salvar(Request $post)
    {
        $dados = $post->all();

        //Validação da publicação ativa ou não
        if(isset($dados['publicado']))
        {
            $dados['publicado'] = 'sim';
        } 
        else
        {
            $dados['publicado'] = 'nao';
        }

        //Validação da imagem
        if($post->hasFile('imagem'))
        {
            $imagem = $post->file('imagem');

            $diretorio = 'img/cursos/';

            $extensao = $imagem->guessClientExtension();

            $numeroRan = rand(1, 9999);

            $nomeImagem = 'img_' . $numeroRan . '.' . $extensao; 

            $imagem->move($diretorio, $nomeImagem);

            $dados['imagem'] = $diretorio . $nomeImagem; 

        }

        Curso::create($dados);

        return redirect()->route('admin.cursos');

    }

    public function editar($id)
    {
        $registro = Curso::find($id);
        return view('admin.editar', compact('registro'));
    }

    public function atualizar(Request $put, $id)
    {
        $dados = $put->all();
        
        //Validação da publicação ativa ou não
        if(isset($dados['publicado']))
        {
            $dados['publicado'] = 'sim';
        } 
        else
        {
            $dados['publicado'] = 'nao';
        }

        //Validação da imagem
        if($put->hasFile('imagem'))
        {
            $imagem = $put->file('imagem');

            $diretorio = 'img/cursos/';

            $extensao = $imagem->guessClientExtension();

            $numeroRan = rand(1, 9999);

            $nomeImagem = 'img_' . $numeroRan . '.' . $extensao; 

            $imagem->move($diretorio, $nomeImagem);

            $dados['imagem'] = $diretorio . $nomeImagem; 

        }

        Curso::find($id)->update($dados);

        return redirect()->route('admin.cursos');

    }  

    public function delete($id)
    {
        Curso::find($id)->delete();
        return redirect()->route('admin.cursos');
    }

}
