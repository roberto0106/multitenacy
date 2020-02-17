@extends('layouts.app')

@section('content')

    {{ Form::model($product, ['route' => ['app.products.update', $product],'method'=>'PUT']) }}

    {{Form::label('nome')}}
    {{Form::text('name')}}
    {{Form::label('descrição')}}
    {{Form::text('description')}}
    {{Form::label('preço')}}
    {{Form::number('price')}}

    {{ Form::select('category', $category->pluck('name', 'id')->all()) }}


    {{Form::submit('registrar')}}



    {!! Form::close() !!}
@endsection