@extends('layouts.admin')

@section('body')

<div class="container">
    <div class="table-responsive table-bordered bg-light shadow-sm">
        <table class="table table-bordered table-hover table-sm">
            <thead class="bg-warning shadow-sm">
                <tr>
                    <th>#id</th>           
                    <th>Label</th>
                    <th>Action</th>
                    <th>Active</th> 
                    <th>Sort Order</th>           
                    <th>Edit</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                <a href="#" class="btn btn-primary">Create New Menu</a>
                @foreach($menus as $menu)
                    <tr>
                        <td>{{$menu['id']}}</td>
                        <td>{{$menu['label']}}</td>
                        <td>{{$menu['action']}}</td>
                        <td>{{$menu['active_ind']}}</td>
                        <td>{{$menu['sort_order']}}</td>
                        <td><a href="#" class="btn btn-primary">Edit</a></td>
                        <td><a href="#"  class="btn btn-warning">Remove</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $menus->links() }}
</div>

@endsection
