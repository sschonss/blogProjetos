@extends('layouts.main')

@section('title', 'Publicar Projeto')
    
@section('content')
    <div class="col-md-6 offset-md-3" id="event-create-container">
        <h1>Publique seu projeto</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <br>
            <div class="form-group">
                <label for="title">Projeto:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Projeto" required>
            </div>
            <br>
            <div class="form-group">
                <label for="image">Imagem:</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="Image do Projeto" required>
            </div>
            <br>
            <div class="form-group">
                <label for="title">Cidade</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do Projeto"required>
            </div>
            <br>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <input type="textarea" class="form-control" id="description" name="description" placeholder="Descrição do Projeto"required>
            </div>
            <br>
            <input type="submit" value="Criar Evento" class="btn btn-primary">
        </form>
    </div>
@endsection