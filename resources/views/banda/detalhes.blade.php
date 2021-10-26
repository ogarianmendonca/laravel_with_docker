@extends('welcome')
@section('content')
    <div class="row">
        <div class="col-10">
            <h2>{{ $banda->nome }}</h2>
        </div>
        <div class="col-2">
            <p><a href="{{ route('banda.index') }}" type="button" class="btn btn-info">Listar</a></p>
        </div>
    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Álbuns</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Membros</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <br>
            <div class="row">
                @foreach($banda->albuns as $album)
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" src="https://www.metal-archives.com/images/1/5/7/157_photo.jpg?2026" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{ $album->nome }}</strong></h5>
                                <p class="card-text">Data de Lançamento: <strong>{{ $album->data_lancamento }}</strong></p>
                                <p class="card-text">Total de músicas: <strong>{{ $album->qtd_musicas }}</strong></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <br>
            <div class="row">
                @foreach($banda->membros as $membro)
                    <div class="col-4" style="max-height: 50%">
                        <div class="card">
                            <img class="card-img-top" src="https://www.metal-archives.com/images/3/7/6/6/3766_artist.jpg?3023" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{ $membro->nome }}</strong></h5>
                                <p class="card-text">Atividade: <strong>{{ $membro->atividade }}</strong></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
