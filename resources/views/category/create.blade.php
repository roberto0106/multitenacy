@extends('layouts.app')

@section('content')

<div class="form-group">

    {{ Form::open(['route' => 'app.categories.store', 'method' => 'post']) }}


    {{Form::label('nome')}}
    {{Form::text('name')}}


    {{Form::submit('registrar')}}

    {!! Form::close() !!}
</div>


@endsection