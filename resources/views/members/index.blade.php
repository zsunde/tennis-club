@extends('layouts.app')

@section('content')
<a class="btn btn-primary mt-5" href="{{route('members.create')}}">Add</a>
<table class="table table-striped mt-5">
     <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Gender</th>
            <th scope="col">Role</th>
            <th scope="col">Address</th>
            <th>Actions</th>
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
            <td>{{$member->role->name}}</td>
            <td>{{$member->address->street}}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{route('members.show', ['member' => $member -> id])}}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('members.edit', ['member' => $member -> id])}}">Edit</a>
            <a class="btn btn-outline-primary" href="{{ route('change_password.edit', ['member' => $member->id]) }}">Change password</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
