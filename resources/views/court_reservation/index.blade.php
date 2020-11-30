@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Started at</th>
            <th scope="col">Finished at</th>
            <th scope="col">Court id</th>
            <th scope="col">Member id</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($court_reservation->items() as $reservation)
        <tr>
            <td>{{$reservation->id}}</td>
            <td>{{$reservation->started_at}}</td>
            <td>{{$reservation->finished_at}}</td>
            <td>{{$reservation->court_id}}</td>
            <td>{{$reservation->member_id}}</td>
        </tr>
        @endforeach
    </tbody>
</table>@endsection
