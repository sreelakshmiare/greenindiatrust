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
    <form action="{{ route('adminUpdateMenu',['id' => $menu->id ])}}" method="post" enctype="multipart/form-data">
        <h2 class="text-center">Edit Menu</h2>
        {{csrf_field()}}

        <div class="form-group">
            <label for="label">Menu Name</label>
            <input type="text" class="form-control" name="label" id="label" placeholder="Menu Name" value="{{$menu->label}}" required>
        </div>
        
        <div class="form-group">            
            <div class="row">                
                <div class="column col-md-6">
                    <label for="action">Action</label>
                    <input type="text" class="form-control" name="action" id="action" placeholder="Action" value="{{$menu->action}}" required>
                </div>                
                <div class="column col-md-4">
                    <label for="action">Crop</label>
                    <select class="form-control" name="crop_id">
                        <option value="">Please Select</option>                                
                        @foreach ($crops as $crop)
                            <option value="{{ $crop->id }}"
                            @if ($crop->id == $menu->crop_id)
                                selected="selected"
                            @endif
                            >{{ $crop->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="external_url">Externl Url</label>
            <input type="text" class="form-control" name="external_url" id="external_url" value="{{$menu->external_url}}"  placeholder="External Url">
        </div>

        <div class="form-group">
            <label for="sort_order">Sort Order</label>
            <input type="text" class="form-control" name="sort_order" id="sort_order" value="{{$menu->sort_order}}" placeholder="Sort Order">
        </div>

        <div class="form-group">
            <label for="brands">Parent Menu</label>
            
            <select class="form-control" name="parent_id">
                <option value=""
                    @if ("" == $menu->parent_id)
                        selected="selected"
                    @endif
                        ></option>
                @foreach ($parentMenus as $parentMenu)
                    <option value="{{ $parentMenu->id }}"
                    @if ($parentMenu->id == $menu->parent_id)
                        selected="selected"
                    @endif
                        >{{ $parentMenu->label }}</option>
                @endforeach
            </select>            
        </div>

        <div class="form-group">
            <label for="brands">Sub Parent Menu</label>
            
            <select class="form-control" name="sub_parent_id">
                <option value=""
                    @if ("" == $menu->sub_parent_id)
                        selected="selected"
                    @endif
                        ></option>
                @foreach ($subparentMenus as $subparentMenu)
                    <option value="{{ $subparentMenu->id }}"
                    @if ($subparentMenu->id == $menu->sub_parent_id)
                        selected="selected"
                    @endif
                        >{{ $subparentMenu->label }}</option>
                @endforeach
            </select>            
        </div>

        <div class="form-group">
            <label for="active_ind">Active</label>
            <select class="form-control" name="active_ind">
                <option value="Y"
                    @if ('Y' == $menu->active_ind)
                        selected="selected"
                    @endif
                    >Y</option>

                    <option value="N"
                    @if ('N' == $menu->active_ind)
                        selected="selected"
                    @endif
                    >N</option>
            </select>                
        </div> 
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit </button>
            <button class="btn btn-primary" type="reset">Reset </button>
            <a href="{{route('adminDisplayMenus')}}" class="btn btn-primary">Cancel</a>
        </div>
    </form>
</div>


@else
    <div class="alert alert-danger">Only first level admins can edit menus</div>
@endif
@endsection