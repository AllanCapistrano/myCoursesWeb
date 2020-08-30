@extends('layouts.layoutCourseInfo')

@section('title')
Editar um curso
@endsection

@section('put')
{{ method_field('PUT') }} <!-- Forçar a utiliação do método PUT -->
@endsection

@section('route')
{{ route('curso.update', $curso->id) }}
@endsection

@section('btn-name')
Editar
@endsection

@section('value-name')
{{ $curso->name }}
@endsection

@section('value-content')
{{ $curso->content }}
@endsection

@section('value-date')
{{ $curso->date }}
@endsection
