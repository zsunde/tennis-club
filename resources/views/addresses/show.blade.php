@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3">Address detail</h3>
        <ul class="list-unstyled">
            <li>Street: {{$address -> street}}</li>
            <li>City id: {{$address -> city_id}}</li>
        </ul>
        <a href="{{ url()->previous()}}" class="btn btn-outline-primary">Back</a>

</div>
@endsection
