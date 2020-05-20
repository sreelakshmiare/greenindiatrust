@extends('layouts.admin')

@section('body')
@if(Auth::user()->admin_level == 1) 

<div class="contact-clean">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>

            <li>{!! print_r($errors->all()) !!}</li>

        </ul>
    </div>
    @endif
    <form action="{{ route('adminUpdateCategory',['id' => $category->id ])}}" method="post" enctype="multipart/form-data">
        <h2 class="text-center">Edit Gallery Category</h2>
        {{csrf_field()}}

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Product Name" value="{{$category->name}}" required>
        </div>
        
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" name="type" id="type" placeholder="type" value="{{$category->type}}" required>
        </div>        

        <div class="form-group">
            <label for="active_ind">Active</label>
            <select class="form-control" name="active_ind">
                <option value="Y"
                    @if ('Y' == $category->active_ind)
                        selected="selected"
                    @endif
                    >Y</option>

                    <option value="N"
                    @if ('N' == $category->active_ind)
                        selected="selected"
                    @endif
                    >N</option>
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit </button>
            <button class="btn btn-primary" type="reset">Reset </button>
            <a href="{{route('adminDisplayCategories')}}" class="btn btn-primary">Cancel</a>
        </div>
    </form>
</div>

@else
    <div class="alert alert-danger">Only first level admins can edit categories</div>
@endif
@endsection