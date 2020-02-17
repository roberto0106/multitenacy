@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Categoria</th>
                <th>Modificado em</th>
                <th>Editar</th>
                <th>Apagar</th>
            </tr>


            @foreach($products as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->name }}</td>
                    <td>{{ $produto->description }}</td>
                    <td>{{ $produto->price }}</td>
                    <td>{{ $produto->category->name}}</td>
                    <td>{{ $produto->updated_at }}</td>
                    <td><a href={{ route('app.products.edit',$produto->id) }}>editar</a></td>
                    <td>
                        {!! Form::open([
                             'method' => 'DELETE',
                             'route' => ['app.products.destroy', $produto->id]
                         ]) !!}
                        <button type="submit" class="btn-link">apagar</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>




@endsection