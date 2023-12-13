@extends('layouts/layout')
{{-- @use (Carbon\Carbon); --}}
@section('content')
{{-- @dd($trains); --}}
{{-- @dd(Carbon::now()); --}}
<main>
    <div class="container">
        <div class="row">
            <div class="col12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Azienda</th>
                            <th scope="col">Partenza da</th>
                            <th scope="col">Arrivo a</th>
                            <th scope="col">Orario di partenza</th>
                            <th scope="col">Orario di arrivo</th>
                            <th scope="col">codice del treno</th>
                            <th scope="col">Numero vagoni</th>
                            <th scope="col">In orario</th>
                            <th scope="col">Cancellato</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($trains as $train)
                      <tr>
                        <th scope="row">{{$train->id}}</th>
                        <td>{{$train->brand}}</td>
                        <td>{{$train->departure_station}}</td>
                        <td>{{$train->arrival_station}}</td>
                        <td>{{$train->departure_time}}</td>
                        <td>{{$train->arrival_time}}</td>
                        <td>{{$train->train_code}}</td>
                        <td>{{$train->wagons_number}}</td>
                        <td>{{$train->in_time === 0 ? 'no':'si'}}</td>
                        <td>{{$train->suppressed === 0 ? 'no':'si'}}</td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
              
            </div>
                
        </div>
    </div>
</main>
    
@endsection