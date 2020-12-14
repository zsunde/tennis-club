@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3">Match result detail</h3>
        <ul class="list-unstyled">
        <li>Match id: {{$match_result -> match_id}}</li>
        <li>Winner player id: {{$match_result ->winner_player_id}}</li>
        <li>Number of sets: {{$match_result -> number_of_sets}}</li>
        </ul>
        <a href="{{ url()->previous()}}" class="btn btn-outline-primary">Back</a>
</div>
@endsection
