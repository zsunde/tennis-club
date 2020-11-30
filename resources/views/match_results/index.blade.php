@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Match id</th>
            <th scope="col">Winner player id</th>
            <th scope="col">Number of sets</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($match_results->items() as $match_result)
        <tr>
            <td>{{$match_result->match_id}}</td>
            <td>{{$match_result->winner_player_id}}</td>
            <td>{{$match_result->number_of_sets}}</td>
        </tr>
        @endforeach
    </tbody>
</table>@endsection
