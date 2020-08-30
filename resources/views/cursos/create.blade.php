@extends('layouts.layoutCourseInfo')

@section('title')
Cadastar um curso
@endsection

@section('route')
{{ route('curso.store') }}
@endsection

@section('btn-name')
Enviar
@endsection