<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="imagem">Imagem</label>
            <input type="file" class="form-control" id="imagem" name="imagem">
        </div>

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $banda->nome ?? ''}}" >
        </div>

        <div class="form-group">
            <label for="genero">Gênero</label>
            <input type="text" class="form-control" id="genero" name="genero" value="{{ $banda->genero ?? '' }}">
        </div>

        <div class="form-group">
            <label for="data_criacao">Formada Em</label>
            <input type="text" class="form-control" id="data_criacao" name="data_criacao" value="{{ $banda->data_criacao ?? '' }}">
        </div>
    </div>
    <div class="col-4">
        <img class="img-thumbnail" src="{{ $banda->imagem }}" alt="Card image cap">
    </div>
</div>
