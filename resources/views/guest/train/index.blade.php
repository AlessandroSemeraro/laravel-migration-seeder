@extends ('layouts.app')

@section('main-content')

<h1>Trains today</h1>
<ul>
    @forelse ($trains as $train)
    <li>
        <h3>{{$train->name_company}}</h3>
        <h6>From {{$train->departure_station}} to  {{$train->arrival_station}}</h6>
        <p>{{$train->departure_time}} - {{$train->arrival_time}}</p>
        <p>Train ID:{{$train->train_code}} <br>
        Wagons number: {{$train->wagons_no}} <br>
        {{ ($train->on_time) ? 'on time' : 'delayed' }},
        {{ ($train->cancelled) ? 'CANCELLED' : '' }}
    </li>
    @empty
    <li>

    </li>
    @endforelse
    <li>
        
    </li>
</ul>

@endsection