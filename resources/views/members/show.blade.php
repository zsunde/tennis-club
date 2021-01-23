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
</div>
<div class="btn-group" role="group">
<a class="btn btn-secondary" href="{{ route('members.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('members.edit', ['member' => $member]) }}">Edit</a>

<form class="form-inline" action="{{ route('members.destroy', ['member' => $member->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
</div>
@endsection
