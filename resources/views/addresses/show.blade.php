@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3">Address detail</h3>
    <img src="https://picsum.photos/300" alt="profile image" class="d-block mx-auto rounded-circle">
        <ul class="list-unstyled">
            <li>Street: {{$address -> street}}</li>
            <li>City: {{$address -> city -> name}}</li>
        </ul>
        <a href="{{ url()->previous()}}" class="btn btn-outline-primary">Back</a>

</div>
@endsection
