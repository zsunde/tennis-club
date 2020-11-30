@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courts->items() as $court)
        <tr>
            <td>{{$court->id}}</td>
            <td>{{$court->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>@endsection
