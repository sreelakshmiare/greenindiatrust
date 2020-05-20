@extends('layouts.admin')

@section('body')
@if(Auth::user()->admin_level == 1) 

<div class="contact-clean">
    <form action="{{ route('adminUpdateUser',['id' => $user->id ])}}" method="post">
        {{csrf_field()}}
        <h2 class="text-center">Edit User</h2>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="User Name" value="{{$user->name}}" required>
        </div>
        
        <div class="form-group">
            <label for="type">User Role</label>
            <select class="form-control" name="admin_level">
                @foreach ($roles as $role)                        
                    <option value="{{ $role->id }}"
                    @if ($role->id == $user->admin_level)
                        selected="selected"
                    @endif
                    >{{ $role->role_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="type">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="email" value="{{$user->email}}" required>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit </button>
            <button class="btn btn-primary" type="reset">Reset </button>
            <a href="{{route('adminDisplayUsers')}}" class="btn btn-primary">Cancel</a>
        </div>
    </form>
</div>


@else
    <div class="alert alert-danger">Only first level admins can edit users</div>
@endif
@endsection