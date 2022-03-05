@extends('layouts.main')

@section('title', 'REC - Projetos')
    
@section('content')
    
<div id="search-container" class="col-md-12">
    <h1>Busque um projeto</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
    <br>
    <div class="seta">
        <h3>Conheça nosso trabalho</h3>
        <ion-icon name="caret-down-outline"></ion-icon>
    </div>
    
</div>

<div id="events-container" class="col-md-12">
    @if ($search)
        <h2>Buscando por: {{$search}}</h2>
        <br>
    @else
         <h2>Projetos</h2>
         <p class="subtitle">Veja todos os projetos</p>
    @endif
    
    
    <div id="cards-container" class="row">
        @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="img/events/{{$event->image}}" alt="{{ $event->title }}">
                <div class="card-body">
                    
                    <h5 class="card-title"> {{$event->title}}</h5>
                    <div class="text">
                        
                    </div>
                    <a href="/events/{{$event->id}}" class="btn btn-primary">Saber Mais</a>
                </div>
            </div>
        @endforeach
        @if (count($events) == 0  && $search)
            <p>Não foi possível encontrar nenhum projeto com {{$search}}! <a href="/">Ver todos!</a></p>
            @elseif(count($events) == 0)
                <p>Não há projetos disponíveis! </p>
            
        @endif
    </div>
</div>

@endsection