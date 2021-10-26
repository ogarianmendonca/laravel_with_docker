@extends('welcome')
@section('content')
    <div class="row">
        <div class="col-10">
            <h2>Atualizar banda: {{ $banda->nome }}</h2>
        </div>
        <div class="col-2">
            <p><a href="{{ route('banda.index') }}" type="button" class="btn btn-info">Listar</a></p>
        </div>
    </div>
    <form method="POST" action="{{ route('banda.edita', $banda->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('banda._form')

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
