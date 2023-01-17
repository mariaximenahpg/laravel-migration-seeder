@extends('layouts.main')
@section('content')
<div class="container">
    <h3 class="d-flex justify-content-center">TABELLA TRENI</h3>
    <table class="table">
        <thead class="">
            <tr>
                {{-- <th scope="col">id</th> --}}
                <th scope="col">Azienda</th>
                <th scope="col">Stazione di partenza</th>
                <th scope="col">Stazione di arrivo</th>
                <th scope="col">Orario partenza</th>
                <th scope="col">Orario arrivo</th>
                <th scope="col">Codice treno</th>
                <th scope="col">N° carrozze</th>
                <th scope="col">In orario</th>
                <th scope="col">Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                {{-- <td>{{$train->id}}</td> --}}
                <td>{{$train->company}}</td>
                <td>{{$train->departure_station}}</td>
                <td>{{$train->arrival_station}}</td>
                <td>{{$train->departure_time}}</td>
                <td>{{$train->arrival_time}}</td>
                <td>{{$train->train_code}}</td>
                <td>{{$train->wagons_number}}</td>
                <td>{{$train->in_time}}</td>
                <td>{{$train->cancelled}}</td>
            </tr>
                
            @endforeach
        </tbody>
    </table>

</div>
@endsection