<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
  public function index(){ /*Mostrar todos os cursos.*/
    $cursos = Curso::all();

    return view('cursos.index', compact('cursos'));
  }

  public function create(){ /*Redirecionar o usuário para a tela de criação dos cursos.*/
    return view('cursos.create');
  }

  public function store(Request $request){ /*Inserir os dados no banco de dados.*/
    $curso = new Curso();

    $curso->name = $request->name;
    $curso->content = $request->content;
    $curso->date = $request->date;

    $curso->save(); /*Insere os dados no banco de dados.*/

    return redirect()->route('index');
  }

  public function edit($id){ /*Redirecionar o usuário para a tela de edição dos cursos.*/
    $curso = Curso::find($id);

    return view('cursos.edit', compact('curso'));
  }

  public function update(Request $request, $id){ /*Editar os dados .*/
    $curso = Curso::find($id);

    $curso->name = $request->name;
    $curso->content = $request->content;
    $curso->date = $request->date;

    $curso->save(); /*Insere os dados no banco de dados.*/

    return redirect()->route('index');
  }

  public function destroy(Request $request, $id){ /*Deletar um curso cadastrado.*/
    $curso = Curso::find($id);

    $curso->delete();

    return redirect()->route('index');
  }
}
