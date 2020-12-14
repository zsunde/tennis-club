@extends('layouts.app')

@section('content')
<a class="btn btn-primary mt-5" href="{{route('addresses.create')}}">Add</a>
<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">street</th>
            <th scope="col">City id</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($addresses->items() as $address)
        <tr>
            <td>{{$address->id}}</td>
            <td>{{$address->street}}</td>
            <td>{{$address->city_id}}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{route('addresses.show', ['address' => $address -> id])}}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('addresses.edit', ['address' => $address -> id])}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>@endsection
