@extends('layouts.admin')

@section('body')
<div class="container">
    <div class="table-responsive table-bordered bg-light shadow-sm">
        <table class="table table-bordered table-hover table-sm">
            <thead class="bg-warning shadow-sm">
                <tr>
                    <th>#id</th>           
                    <th>Role Name</th>           
                    <th>Active</th>            
                    <th>Edit</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{route('adminCreateRoleForm')}}" class="btn btn-primary">Create New Role</a>
                @foreach($roles as $role)
                    <tr>
                        <td>{{$role['id']}}</td>
                        <td>{{$role['role_name']}}</td>
                        <td>{{$role['active_ind']}}</td>
                        
                        <td><a href="{{ route('adminEditRoleForm',['id' => $role['id'] ])}}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{ route('adminDeleteRole',['id' => $role['id'] ])}}"  class="btn btn-warning">Remove</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $roles->links() }}
</div>

@endsection
