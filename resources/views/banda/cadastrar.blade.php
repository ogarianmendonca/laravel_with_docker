@extends('welcome')
@section('content')
    <div class="row">
        <div class="col-10">
            <h2>Cadastro de Bandas</h2>
        </div>
        <div class="col-2">
            <p><a href="{{ route('banda.index') }}" type="button" class="btn btn-info">Listar</a></p>
        </div>
    </div>
    <form method="POST" action="{{ route('banda.cadastra') }}">
        @csrf
        @include('banda._form')

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
