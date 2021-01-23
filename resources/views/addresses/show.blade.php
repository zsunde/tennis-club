@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3">Address detail</h3>
    <img src="https://picsum.photos/300" alt="profile image" class="d-block mx-auto rounded-circle">
        <ul class="list-unstyled">
            <li>Street: {{$address -> street}}</li>
            <li>City: {{$address -> city -> name}}</li>
        </ul>
</div>

<div class="btn-group" role="group">
<a class="btn btn-secondary" href="{{ route('addresses.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('addresses.edit', ['address' => $address]) }}">Edit</a>

<form class="form-inline" action="{{ route('addresses.destroy', ['address' => $address->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
</div>
@endsection
