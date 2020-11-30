@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">street</th>
            <th scope="col">City id</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($addresses->items() as $address)
        <tr>
            <td>{{$address->id}}</td>
            <td>{{$address->street}}</td>
            <td>{{$address->city_id}}</td>
        </tr>
        @endforeach
    </tbody>
</table>@endsection
