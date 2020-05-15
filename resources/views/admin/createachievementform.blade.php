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
    <form action="{{ route('adminSendCreateAchievementForm')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <h2 class="text-center">Create Achievement</h2>
        <div class="form-group">
            <label for="achievement">Achievement</label>
            <input type="text" class="form-control" name="achievement" id="achievement" required>
        </div>
        <div class="form-group">
            <label for="count">count</label>
            <input type="text" class="form-control" name="count" id="count" required>
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
            <a href="{{route('adminDisplayAchievements')}}" class="btn btn-primary">Cancel</a>
        </div>
    </form>
</div>

@endsection