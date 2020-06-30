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
    <form action="{{ route('adminSendCreateNewsAndEventsForm')}}" method="post" enctype="multipart/form-data">
        <h2 class="text-center">Create New News and Events</h2>
        {{csrf_field()}}

        <div class="form-group">
            <label for="news_events">News and Events</label>
            <input type="text" class="form-control" name="news_events" id="news_events" required>
        </div>

        <div class="form-group">
            <label for="valid_from">Valid From</label>
            <input type="date" class="form-control" name="valid_from" id="valid_from">
        </div>

        <div class="form-group">
            <label for="valid_to">Valid To</label>
            <input type="date" class="form-control" name="valid_to" id="valid_to">
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
        <a href="{{route('adminDisplayNewsAndEvents')}}" class="btn btn-primary">Cancel</a>
        </div>
    </form>
</div>

@endsection