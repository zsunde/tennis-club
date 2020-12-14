@extends('layouts.app')

@section('content')
<a class="btn btn-primary mt-5" href="{{route('cities.create')}}">Add</a>
<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Country id</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cities->items() as $city)
        <tr>
            <td>{{$city->id}}</td>
            <td>{{$city->name}}</td>
            <td>{{$city->country_id}}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{route('cities.show', ['city' => $city -> id])}}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('cities.edit', ['city' => $city -> id])}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>@endsection
