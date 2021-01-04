@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3">Member detail</h3>
    <img src="https://picsum.photos/300" alt="profile image" class="d-block mx-auto rounded-circle">
        <ul class="list-unstyled">
            <li>Name: {{$member -> name}}</li>
            <li>Email: {{$member -> email}}</li>
            <li>Password: {{$member -> password}}</li>
            <li>Gender: {{$member -> gender}}</li>
            <li>Role: {{$member -> role -> name}}</li>
            <li>Address: {{$member -> address -> street}}</li>
        </ul>
        <a href="{{ url()->previous()}}" class="btn btn-outline-primary">Back</a>

</div>
@endsection
