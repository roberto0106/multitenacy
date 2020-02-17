@extends('layouts.app')

@section('content')

    {{ Form::model($category, ['route' => ['app.categories.update', $category],'method'=>'PUT']) }}

    {{Form::label('nome')}}
    {{Form::text('name')}}


    {{Form::submit('registrar')}}



    {!! Form::close() !!}
@endsection