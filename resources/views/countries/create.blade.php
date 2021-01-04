@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('countries.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        <!-- country name -->
        <div class="form-group">
            <label for="name">Country name</label>
            <input value="{{ @old('name') }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <!-- native name -->
        <div class="form-group">
            <label for="native-name">Country code</label>
            <input value="{{ @old('code') }}" name="code" type="text" class="form-control" id="native-name">
            @if ($errors->has('code'))
                <span class="text-danger">{{ $errors->first('code') }}</span>
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('countries.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection