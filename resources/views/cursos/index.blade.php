@extends('layouts.layout')

@section('conteudo')
<div class="title m-b-md">
  <h1>Cursos cadastrados</h1>
</div>

<a class="btn btn-success" href="{{ route('curso.create') }}">Inserir curso</a> <br /><br />

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Conteúdo</th>
      <th scope="col">Horário</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($cursos as $curso)
    <tr>
      <th scope="row">{{ $curso->id }}</th>
      <td>{{ $curso->name }}</td>
      <td>{{ $curso->content }}</td>
      <td>{{ $curso->date }}</td>
      <td>
        <a href="{{ route('curso.edit', $curso->id) }}" class="btn btn-success">Editar</a>

        <form action="{{ route('curso.delete', $curso->id) }}" method="post">
          @csrf
          {!! method_field('delete') !!} <!-- Forçar a utiliação do método DELETE -->
          <button type="submit" class="btn btn-danger">Deletar</button>
        </form>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>

@endsection