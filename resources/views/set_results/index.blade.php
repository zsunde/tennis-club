@extends('layouts.app')

@section('content')
<a class="btn btn-primary mt-5" href="{{route('set_results.create')}}">Add</a>
<table class="table table-striped mt-3"> 
    <thead>
        <tr>
            <th scope="col">Set number</th>
            <th scope="col">Match id</th>
            <th scope="col">Player1 games</th>
            <th scope="col">Player2 games</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($results->items() as $set_result)
        <tr>
            <td>{{$set_result->set_number}}</td>
            <td>{{$set_result->match_id}}</td>
            <td>{{$set_result->player1_games}}</td>
            <td>{{$set_result->player2_games}}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{route('set_results.show', ['set_result' => $set_result -> set_number])}}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('set_results.edit', ['set_result' => $set_result -> set_number])}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>@endsection
