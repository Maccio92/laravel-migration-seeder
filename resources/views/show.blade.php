@extends('layouts.base')

@section('content')
<div>
    <div class="card">
            <h2>Compagnia: {{$train -> company}}</h2>
            <h3>Stazione di Partenza:</h3>
            <p>{{$train -> departure_station}}</p>
            <h4>Giorno di Partenza:</h4>
            <p>{{$train -> departure_date}}</p>
            <h4>Orario di Partenza:</h4>
            <p>{{$train -> departure_hours}}</p>
            <h3>Stazione di Arrivo: </h3>
            <p>{{$train -> arrival_station}}</p>
            <h4>Giorno di Arrivo:</h4>
            <p>{{$train -> arrival_date}}</p>
            <h4>Orario di Arrivo:</h4>
            <p>{{$train -> arrival_hours}}</p>
            <h4>Codice Treno:</h4>
            <p>{{$train -> code}}</p>
            <h4>N° Carrozze:</h4>
            <p>{{$train -> carriages}}</p>
</div>
@endsection