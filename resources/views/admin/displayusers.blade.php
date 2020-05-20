@extends('layouts.admin')

@section('body')

<div class="container">
    <div class="table-responsive table-bordered bg-light shadow-sm">
        <table class="table table-bordered table-hover table-sm">
            <thead class="bg-warning shadow-sm">
                <tr>
                    <th>#id</th>
                    <th>Name</th>
                    <th>User Role</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user['id']}}</td>
                    <td>{{$user['name']}}</td> 
                    @foreach ($roles as $role)  
                        @if ($role->id == $user['admin_level'])                 
                            <td>{{$role->role_name}}</td>
                            @break
                        @endif
                    @endforeach
                    <td>{{$user['email']}}</td>
                    <td><a href="{{ route('adminEditUserForm',['id' => $user['id'] ])}}" class="btn btn-primary">Edit</a></td>
                    <td><a href="{{ route('adminDeleteUser',['id' => $user['id'] ])}}"  class="btn btn-warning">Remove</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{ $users->links() }}
</div>

@endsection