@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Gender</th>
            <th scope="col">Role id</th>
            <th scope="col">Address id</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($members->items() as $member)
        <tr>
            <td>{{$member->id}}</td>
            <td>{{$member->name}}</td>
            <td>{{$member->email}}</td>
            <td>{{$member->password}}</td>
            <td>{{$member->gender}}</td>
            <td>{{$member->role_id}}</td>
            <td>{{$member->address_id}}</td>
        </tr>
        @endforeach
    </tbody>
</table>@endsection
