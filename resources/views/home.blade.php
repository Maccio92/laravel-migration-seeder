@extends('layouts.base')

@section('content')
<div>
    @foreach($trains as $train)
    <div class="card">
            <h2>Compagnia: {{$train -> company}}</h2>
            <h3>Stazione di Partenza: {{$train -> departure_station}}</h3>
            <h4>Giorno di Partenza: {{$train -> departure_date}}</h4>
            <h4>Orario di Partenza: {{$train -> departure_hours}}</h4>
            <h3>Stazione di Arrivo: {{$train -> arrival_station}}</h3>
            <h4>Giorno di Partenza: {{$train -> arrival_date}}</h4>
            <h4>Orario di Arrivo: {{$train -> arrival_hours}}</h4>
            <h4>Codice Treno: {{$train -> code}}</h4>
            <h4>N° Carrozze: {{$train -> carriages}}</h4>
            @if ($train->in_time == false)
                <h4>Ritardo: Treno in ritardo</h4>
                @else
                <h4>Ritardo: Treno in orario</h4>
                @endif
            @if ($train->deleted == true)
                <div class="red"></div>
                @else
                <div class="green"></div>
            @endif
        </div>
    @endforeach
</div>
@endsection