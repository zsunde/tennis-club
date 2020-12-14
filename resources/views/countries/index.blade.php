@extends('layouts.app')

@section('content')
<a class="btn btn-primary mt-5" href="{{route('countries.create')}}">Add</a>
<table class="table table-striped mt-3"> 
   <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Code</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($countries->items() as $country)
        <tr>
            <td>{{$country->id}}</td>
            <td>{{$country->name}}</td>
            <td>{{$country->code}}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{route('countries.show', ['country' => $country -> id])}}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('countries.edit', ['country' => $country -> id])}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>@endsection
