@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3">City detail</h3>
        <ul class="list-unstyled">
            <li>Name: {{$city -> name}}</li>
            <li>Country id: {{$city -> country_id}}</li>
        </ul>
        <a href="{{ url()->previous()}}" class="btn btn-outline-primary">Back</a>
</div>
@endsection
