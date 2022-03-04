@extends('layouts.main')

@section('title', 'Criar Evento')
    
@section('content')
    <div class="col-md-6 offset-md-3" id="event-create-container">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST">
            @csrf
            <br>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
            </div>
            <br>
            <div class="form-group">
                <label for="title">Cidade</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
            </div>
            <br>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
            </div>
            <br>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <input type="textarea" class="form-control" id="description" name="description" placeholder="Descrição do Evento">
            </div>
            <br>
            <input type="submit" value="Criar Evento" class="btn btn-primary">
        </form>
    </div>
@endsection