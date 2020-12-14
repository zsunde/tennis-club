@extends('layouts.app')

@section('content')
<a class="btn btn-primary mt-5" href="{{route('matches.create')}}">Add</a>
<table class="table table-striped mt-3"> 
   <thead>    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Player1 id</th>
            <th scope="col">Player2 id</th>
            <th scope="col">Played at</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($matches->items() as $match)
        <tr>
            <td>{{$match->id}}</td>
            <td>{{$match->player1_id}}</td>
            <td>{{$match->player2_id}}</td>
            <td>{{$match->played_at}}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{route('matches.show', ['match' => $match -> id])}}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('matches.edit', ['match' => $match -> id])}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>@endsection
