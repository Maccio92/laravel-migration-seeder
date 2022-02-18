@extends('layouts.base')

@section('content')
<div>
    @foreach($trains as $train)
    <div class="card">
            <h2>{{$train -> id}}</h2>
            <h2>Compagnia: {{$train -> company}}</h2>
            <h3>Stazione di Partenza: {{$train -> departure_station}}</h3>
            <h4>Giorno di Partenza: {{$train -> departure_date}}</h4>
            <h4>Orario di Partenza: {{$train -> departure_hours}}</h4>
            <h3>Stazione di Arrivo: {{$train -> arrival_station}}</h3>
            <h4>Giorno di Partenza: {{$train -> arrival_date}}</h4>
            <h4>Orario di Arrivo: {{$train -> arrival_hours}}</h4>
            <h4>Codice Treno: {{$train -> code}}</h4>
            <h4>N° Carrozze: {{$train -> carriages}}</h4>
            <h4>Ritardo: {{$train -> in_time}}</h4>
            <h4>Cancellato: {{$train -> deleted}}</h4>
        </div>
    @endforeach
</div>
@endsection