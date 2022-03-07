@extends('layouts.main')

@section('title', 'Editando: ' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Editando: {{ $event->title }}</h1>
  <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="image">Imagem do Projeto:</label>
      <input type="file" id="image" name="image" class="from-control-file">
      <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
    </div>
    <div class="form-group">
      <label for="title">Projeto:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Projeto" value="{{ $event->title }}">
    </div>
    <div class="form-group">
      <label for="date">Data do Projeto:</label>
      <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
    </div>
    <div class="form-group">
      <label for="title">Cidade:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local do Projeto" value="{{ $event->city }}">
    </div>
    
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no Projeto?">{{ $event->description }}</textarea>
    </div>
    
    <input type="submit" class="btn btn-primary" value="Editar Projeto">
  </form>
</div>

@endsection