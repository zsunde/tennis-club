@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Country id</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cities->items() as $city)
        <tr>
            <td>{{$city->id}}</td>
            <td>{{$city->name}}</td>
            <td>{{$city->country_id}}</td>
        </tr>
        @endforeach
    </tbody>
</table>@endsection
