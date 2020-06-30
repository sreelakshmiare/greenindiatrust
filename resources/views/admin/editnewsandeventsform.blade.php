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
    <form action="{{ route('adminUpdateNewsAndEvents',['id' => $newsandevents->id ])}}" method="post" enctype="multipart/form-data">
        <h2 class="text-center">Edit News And Events</h2>
        {{csrf_field()}}

        <div class="form-group">
            <label for="news_events">News and Events</label>
            <input type="text" class="form-control" name="news_events" id="news_events" placeholder="News Events" value="{{$newsandevents->news_events}}" required>
        </div>
        
        <div class="form-group">
            <label for="valid_from">Valid From</label>
            <input type="date" class="form-control" name="valid_from" id="valid_from" 
            value="{{$newsandevents->valid_from}}">
           
        </div>

        <div class="form-group">
            <label for="valid_to">Valid To</label>
            <input type="date" class="form-control" name="valid_to" id="valid_to" 
            value="{{$newsandevents->valid_to }}">
        </div>
        
        <div class="form-group">
            <label for="active_ind">Active Ind</label>
            <select class="form-control" name="active_ind">
                <option value="Y"
                    @if ('Y' == $newsandevents->active_ind)
                        selected="selected"
                    @endif
                    >Y</option>

                    <option value="N"
                    @if ('N' == $newsandevents->active_ind)
                        selected="selected"
                    @endif
                    >N</option>
            </select>  
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit </button>
            <button class="btn btn-primary" type="reset">Reset </button>
            <a href="{{route('adminDisplayNewsAndEvents')}}" class="btn btn-primary">Cancel</a>
        </div>
    </form>
</div>

@else
    <div class="alert alert-danger">Only first level admins can edit newsandevents</div>
@endif
@endsection