@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h2>Trains departing today</h2>
    <ul>
        @foreach($trains as $train)
            <li>
                to ({{ $train->Stazione_di_partenza }} - {{ $train->Stazione_di_arrivo }}) 
                Codice Treno: {{ $train->Codice_Treno }}
                Numero Carrozze: {{ $train->Numero_Carrozze }}
                In orario: {{ $train->In_orario ? 'Yes' : 'No' }}
                Cancellato: {{ $train->Cancellato ? 'Yes' : 'No' }}
            </li>
        @endforeach
    </ul>
    
@endsection
