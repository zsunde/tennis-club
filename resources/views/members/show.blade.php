@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3">Member detail</h3>
        <ul class="list-unstyled">
            <li>Name: {{$member -> name}}</li>
            <li>Email: {{$member -> email}}</li>
            <li>Password: {{$member -> password}}</li>
            <li>Gender: {{$member -> gender}}</li>
            <li>Role id: {{$member -> role_id}}</li>
            <li>Address id: {{$member -> address_id}}</li>
        </ul>
        <a href="{{ url()->previous()}}" class="btn btn-outline-primary">Back</a>

</div>
@endsection
