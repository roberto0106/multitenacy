@extends('layouts.app')

@section('content')

<div class="form-group">

    {{ Form::open(['route' => 'app.products.store', 'method' => 'post']) }}


    {{Form::label('nome')}}
    {{Form::text('name')}}
    {{Form::label('descrição')}}
    {{Form::text('description')}}
    {{Form::label('preço')}}
    {{Form::number('price')}}

    {{ Form::select('category', $category->pluck('name', 'id')->all()) }}

    {{Form::submit('registrar')}}

    {!! Form::close() !!}
</div>


@endsection