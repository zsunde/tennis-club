@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3">Court reservation detail</h3>
        <ul class="list-unstyled">
            <li>Player1 id: {{$match -> player1_id}}</li>
            <li>Player2 id: {{$match -> player2_id}}</li>
            <li>Played at: {{$match -> played_at}}</li>
        </ul>
        <a href="{{ url()->previous()}}" class="btn btn-outline-primary">Back</a>
</div>
@endsection
