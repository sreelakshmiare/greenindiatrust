@extends('layouts.admin')

@section('body')

<div class="contact-clean">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>

            <li>{!! print_r($errors->all()) !!}</li>

        </ul>
    </div>
    @endif
    <form action="{{ route('adminSendCreateCategoryForm')}}" method="post" enctype="multipart/form-data">
        <h2 class="text-center">Create New Gallery Category</h2>
        {{csrf_field()}}

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>
        
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" name="type" id="type" required>
        </div>

        <div class="form-group">
            <label for="active_ind">Active Ind</label>
            <select class="form-control" name="active_ind">
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit </button>
            <button class="btn btn-primary" type="reset">Reset </button>
            <a href="{{route('adminDisplayCategories')}}" class="btn btn-primary">Cancel</a>
        </div>
    </form>
</div>


@endsection