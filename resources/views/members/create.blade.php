@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('members.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        <!-- member name -->
        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{ @old('name') }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <!-- email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input value="{{ @old('email') }}" name="email" type="text" class="form-control" id="email">
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" name="password" value="" class="form-control" id="password">
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="country">Address</label>
            {{ Form::select('address_id', $addresses, 1, ['class' => 'form-control', 'id' => 'address']) }}
        </div>

        <div class="form-group">
            <label for="role">Role</label>
            {{ Form::select('role_id', $roles, 1, ['class' => 'form-control', 'id' => 'role']) }}
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary float-right">Save</button>
            <a href="{{ route('members.index') }}" class="btn btn-link">Cancel</a>
        </div>
    </form>
</div>
@endsection
