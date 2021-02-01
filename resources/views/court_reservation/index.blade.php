@extends('layouts.app')

@section('content')
<a class="btn btn-primary mt-5" href="{{route('court_reservation.create')}}">Add</a>
<table class="table table-striped mt-3">  
   <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Started at</th>
            <th scope="col">Finished at</th>
            <th scope="col">Court</th>
            <th scope="col">Member</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($court_reservation->items() as $court)
        <tr>
            <td>{{$court->id}}</td>
            <td>{{$court->find($court->id)->members[0]['pivot']->started_at}}</td>
            <td>{{$court->find($court->id)->members[0]['pivot']->finished_at}}</td>
            <td>{{$court->name}}</td>
            <td>{{$court->find($court->id)->members[0]['name']}}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{route('court_reservation.show', ['court_reservation' => $court -> id])}}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('court_reservation.edit', ['court_reservation' => $court -> id])}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>@endsection
