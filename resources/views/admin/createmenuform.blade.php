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
    <form action="{{ route('adminSendCreateMenuForm')}}" method="post" enctype="multipart/form-data">
        <h2 class="text-center">Create New Menu</h2>
        {{csrf_field()}}

        <div class="form-group">
            <label for="label">Menu Name</label>
            <input type="text" class="form-control" name="label" id="label" required>
        </div>
        <div class="form-group">            
            <div class="row">                
                <div class="column col-md-4">
                    <label for="action">Action</label>
                    <input type="text" class="form-control" name="action" id="action" value="/productsbytype?crop=" required>
                </div>                
                <div class="column col-md-4">
                    <label for="action">Crop</label>
                    <select class="form-control" name="crop_id">
                        <option value=""></option>
                        @foreach ($crops as $crop)
                            <option value="{{ $crop->id }}">{{ $crop->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="external_url">Externl Url</label>
            <input type="text" class="form-control" name="external_url" id="external_url">
        </div>

        <div class="form-group">
            <label for="sort_order">Sort Order</label>
            <input type="text" class="form-control" name="sort_order" id="sort_order">
        </div>

        <div class="form-group">
            <label for="brands">Parent Menu</label>
            <select class="form-control" name="parent_id">
                <option value=""></option>
                @foreach ($parentMenus as $parentMenu)
                    <option value="{{ $parentMenu->id }}">{{ $parentMenu->label }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="brands">Sub Parent Menu</label>
            <select class="form-control" name="sub_parent_id">
                <option value=""></option>
                @foreach ($subparentMenus as $subparentMenu)
                    <option value="{{ $subparentMenu->id }}">{{ $subparentMenu->label }}</option>
                @endforeach
            </select>
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
            <a href="{{route('adminDisplayMenus')}}" class="btn btn-primary">Cancel</a>
        </div>
    </form>
</div>

@endsection