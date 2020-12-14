@extends('layouts.app')

@section('content')
<a class="btn btn-primary mt-5" href="{{route('court_reservation.create')}}">Add</a>
<table class="table table-striped mt-3">  
   <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Started at</th>
            <th scope="col">Finished at</th>
            <th scope="col">Court id</th>
            <th scope="col">Member id</th>
            <th>Actions</th>
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
            <td>
            <a class="btn btn-outline-primary" href="{{route('court_reservation.show', ['court_reservation' => $reservation -> id])}}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('court_reservation.edit', ['court_reservation' => $reservation -> id])}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>@endsection
