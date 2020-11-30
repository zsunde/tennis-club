@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Player1 id</th>
            <th scope="col">Player2 id</th>
            <th scope="col">Played at</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($matches->items() as $match)
        <tr>
            <td>{{$match->id}}</td>
            <td>{{$match->player1_id}}</td>
            <td>{{$match->player2_id}}</td>
            <td>{{$match->played_at}}</td>
        </tr>
        @endforeach
    </tbody>
</table>@endsection
