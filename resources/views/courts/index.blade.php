@extends('layouts.app')

@section('content')
<a class="btn btn-primary mt-5" href="{{route('courts.create')}}">Add</a>
<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courts->items() as $court)
        <tr>
            <td>{{$court->id}}</td>
            <td>{{$court->name}}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{route('courts.show', ['court' => $court -> id])}}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('courts.edit', ['court' => $court -> id])}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>@endsection
