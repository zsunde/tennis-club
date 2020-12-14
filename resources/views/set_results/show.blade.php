@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3">Match result detail</h3>
        <ul class="list-unstyled">
        <li>Set number: {{$set_result -> set_number}}</li>
        <li>Match id: {{$set_result -> match_id}}</li>
        <li>Player1 games: {{$set_result -> player1_games}}</li>
        <li>Player2 games: {{$set_result -> player2_games}}</li>
        </ul>
        <a href="{{ url()->previous()}}" class="btn btn-outline-primary">Back</a>
</div>
@endsection
