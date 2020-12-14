@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3">Court reservation detail</h3>
        <ul class="list-unstyled">
            <li>Court id: {{$court_reservation -> id}}</li>
            <li>Member id: {{$court_reservation -> member_id}}</li>
            <li>Started at: {{$court_reservation -> started_at}}</li>
            <li>Finished at: {{$court_reservation -> finished_at}}</li>
        </ul>
        <a href="{{ url()->previous()}}" class="btn btn-outline-primary">Back</a>
</div>
@endsection
