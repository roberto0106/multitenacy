@extends('layouts.app')

@section('content')


    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Nome</th>
                <th>Modificada em</th>
                <th>Editar</th>
                <th>Apagar</th>
            </tr>

            @foreach($categories as $categoria)
                <tr>
                    <td>{{ $categoria->name }}</td>
                    <td>{{ $categoria->updated_at }}</td>
                    <td><a href={{ route('app.categories.edit',$categoria->id) }}>editar</a></td>
                    <td>
                        {!! Form::open([
                             'method' => 'DELETE',
                             'route' => ['app.categories.destroy', $categoria->id]
                         ]) !!}
                        <button type="submit" class="btn-link">apagar</button>

                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>




@endsection