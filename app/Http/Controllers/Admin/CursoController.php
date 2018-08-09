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
        return view('admin.criar', compact('random'));
    }

    public function editImg()
    {

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

        //Create para processar um ID no banco e validar imagem em seguida
        Curso::create($dados);

        //Validação da imagem
        if($post->hasFile('imagem'))
        {
            //Recebendo o file
            $imagem = $post->file('imagem');

            //Pegando extensão do file
            $extensao = $imagem->guessClientExtension();
            
            //Pegando toda a listagem de cursos
            $cursos = Curso::all();

            //Foreach para não repetir um mesmo nome em uma imagem
            foreach ($cursos as $curso) 
            {
                //Caso o título do curso seja o mesmo
                if($dados['titulo'] == $curso->titulo){
                    
                    //Colocaremos o nome da imagem junto com o ID deste curso achado pelo título
                    $diretorio = 'img/cursos/';
                    $id = $curso->id;
                    $nomeImagem = 'img_' . $id . '.' . $extensao;
                    $imagem->move($diretorio, $nomeImagem);

                    //Dados que serão salvos no banco
                    $dados['imagem'] = $diretorio . $nomeImagem; 
                    
                    //Logo fazemos um update com estes dados da imagem validada.
                    Curso::find($id)->update($dados);
                    return redirect()->route('admin.cursos');
                }
            }
        }
        
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
            $extensao = $imagem->guessClientExtension();
            $diretorio = 'img/cursos/';
            $nomeImagem = 'img_' . $id . '.' . $extensao;
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
