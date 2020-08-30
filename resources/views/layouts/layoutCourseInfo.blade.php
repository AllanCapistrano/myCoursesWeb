@extends('layouts.layout')

@section('conteudo')
<div class="title m-b-md">
  <h1>@yield('title')</h1>
</div>

<a href="{{ route('index') }}" class="btn btn-success" >Voltar</a> <br /><br />

<form method="POST" action="@yield('route')">
  @csrf <!-- garantir a segurança dos dados -->
  @yield('put')
  <div class="form-group">
    <label for="name">Nome do curso</label>
    <input type="text" class="form-control" id="name" name="name" value="@yield('value-name')" placeholder="Digite o nome do curso">
  </div>

  <div class="form-group">
    <label for="content">Conteúdo do curso</label>
    <textarea class="form-control" id="content" name="content">@yield('value-content')</textarea>
  </div>

  <div class="form-group">
    <label for="date">Horário</label>
    <input type="datetime-local" class="form-control" id="date" name="date" value=@yield('value-date')>
  </div>

  <button type="submit" class="btn btn-success">@yield('btn-name')</button>
</form>
@endsection