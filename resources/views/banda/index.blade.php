@extends('welcome')
@section('content')
    <div class="row">
        <div class="col-10">
            <h2>Listagem de Bandas</h2>
        </div>
        <div class="col-2">
            <p><a href="{{ route('banda.cadastrar') }}" type="button" class="btn btn-info">Cadastrar</a></p>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Gênero</th>
            <th>Criada Em</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bandas as $banda)
            <tr>
                <td>{{ $banda->nome }}</td>
                <td>{{ $banda->genero }}</td>
                <td>{{ $banda->data_criacao }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('banda.detalhes', $banda->id) }}" type="button" class="btn btn-info btn-sm">Detalhes</a>
                        <a href="{{ route('banda.editar', $banda->id) }}" type="button" class="btn btn-warning btn-sm">Editar</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalExcluir{{ $banda->id }}" data-id="{{ $banda->id }}">
                            Excluir
                        </button>
                    </div>
                </td>
                @include('banda/_modal')
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
