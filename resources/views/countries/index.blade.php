@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Code</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($countries->items() as $country)
        <tr>
            <td>{{$country->id}}</td>
            <td>{{$country->name}}</td>
            <td>{{$country->code}}</td>

        </tr>
        @endforeach
    </tbody>
</table>@endsection
