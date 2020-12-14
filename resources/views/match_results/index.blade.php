@extends('layouts.app')

@section('content')
<a class="btn btn-primary mt-5" href="{{route('match_results.create')}}">Add</a>
<table class="table table-striped mt-3"> 
   <thead>
        <tr>
            <th scope="col">Match id</th>
            <th scope="col">Winner player id</th>
            <th scope="col">Number of sets</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($match_results->items() as $match_result)
        <tr>
            <td>{{$match_result->match_id}}</td>
            <td>{{$match_result->winner_player_id}}</td>
            <td>{{$match_result->number_of_sets}}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{route('match_results.show', ['match_result' => $match_result -> match_id])}}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('match_results.edit', ['match_result' => $match_result -> match_id])}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>@endsection
