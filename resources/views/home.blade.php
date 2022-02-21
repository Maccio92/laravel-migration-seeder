@extends('layouts.base')

@section('content')
    
    <div class="container">
        <div class="row justify-content-center gap-5">
            @foreach($trains as $train)
            <div class="card col-3">
            <h2>Compagnia:</h2>
            <p>{{$train -> company}}</p>
            <h3>Stazione di Partenza:</h3>
            <p>{{$train -> departure_station}}</p>
            <h3>Stazione di Arrivo:</h3>
            <p>{{$train -> arrival_station}}</p>
            <a href="{{ route('show', $train) }}" class="btn btn-primary">View Train</a>
            @if ($train->in_time == false)
                <h4 class="red-text text-center my-3"> In Ritardo </h4>
            @else
                <h4 class="cross text-center my-3"> In Ritardo </h4>
            @endif
            @if ($train->deleted == true)
                <h4 class="red-text text-center my-3"> Cancellato </h4>
            @else
                <h4 class="cross text-center my-3"> Cancellato </h4>
            @endif
        </div>
    @endforeach
        </div>
    </div>
    
@endsection