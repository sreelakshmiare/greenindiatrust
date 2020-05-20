@extends('layouts.admin')

@section('body')

<div class="container">
    <div class="table-responsive table-bordered bg-light shadow-sm">
        <table class="table table-bordered table-hover table-sm">
            <thead class="bg-warning shadow-sm">
                <tr>
                    <th>#id</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Active Ind</th>            
                    <th>Edit</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                <div class="row">
                    <div class="col">
                        <a href="{{route('adminCreateCategoryForm')}}" class="btn btn-primary">Create New Category</a>
                    </div>
                    <form action="{{ route('adminSearchCategories')}}" method="get" enctype="multipart/form-data">                    
                        <div class="col">                        
                                {{csrf_field()}}      
                                <input class="form-control" type="search" id="searchText" name="searchText" placeholder="Category Search" value="{{$searchText}}">
                        </div>
                        <div class="col">                                 
                            <button class="btn btn-primary" type="submit">Search </button> 
                            <a href="{{route('adminDisplayCategories')}}" class="btn btn-primary">Clear</a>                      
                        </div>
                    </form>
                </div>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category['id']}}</td>
                        <td>{{$category['name']}}</td>
                        <td>{{$category['type']}}</td>
                        <td>{{$category['active_ind']}}</td>

                        <td><a href="{{ route('adminEditCategoryForm',['id' => $category['id'] ])}}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{ route('adminDeleteCategory',['id' => $category['id'] ])}}"  class="btn btn-warning">Remove</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $categories->links() }}
</div>

@endsection
