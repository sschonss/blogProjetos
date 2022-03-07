@extends('layouts.main')

@section('title', 'Criar Projeto')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie o seu Projeto</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="image">Imagem do Projeto:</label>
      <input type="file" id="image" name="image" class="from-control-file">
    </div>
    <div class="form-group">
      <label for="title">Projeto:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Projeto">
    </div>
    <div class="form-group">
      <label for="date">Data do Projeto:</label>
      <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="form-group">
      <label for="title">Cidade:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local do Projeto">
    </div>
    
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no Projeto?"></textarea>
    </div>
    
    <input type="submit" class="btn btn-primary" value="Criar Projeto">
  </form>
</div>

@endsection