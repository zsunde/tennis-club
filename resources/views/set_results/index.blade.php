@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Set number</th>
            <th scope="col">Match id</th>
            <th scope="col">Player1 games</th>
            <th scope="col">Player2 games</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($set_results->items() as $set_result)
        <tr>
            <td>{{$set_result->set_number}}</td>
            <td>{{$set_result->match_id}}</td>
            <td>{{$set_result->player1_games}}</td>
            <td>{{$set_result->player2_games}}</td>
        </tr>
        @endforeach
    </tbody>
</table>@endsection
