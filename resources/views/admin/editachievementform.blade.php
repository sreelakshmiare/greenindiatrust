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
            
            <form action="{{ route('adminUpdateAchievement',['id' => $achievement->id ])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <h2 class="text-center">Edit Achievement</h2>
                <div class="form-group">
                    <label for="name">Achievement</label>
                    <input type="text" class="form-control" name="achievement" id="achievement" placeholder="Achievement Name" value="{{$achievement->achievement}}" required>
                </div>
                <div class="form-group">
                    <label for="count">Count</label>
                    <input type="text" class="form-control" name="count" id="count" placeholder="count" value="{{$achievement->count}}" required>
                </div>
                
                <div class="form-group">
                    <label for="active_ind">Active Ind</label>
                    <select class="form-control" name="active_ind">
                        <option value="Y"
                            @if ('Y' == $achievement->active_ind)
                                selected="selected"
                            @endif
                            >Y</option>

                            <option value="N"
                            @if ('N' == $achievement->active_ind)
                                selected="selected"
                            @endif
                            >N</option>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit </button>
                    <button class="btn btn-primary" type="reset">Reset </button>
                    <a href="{{route('adminDisplayAchievements')}}" class="btn btn-primary">Cancel</a>
                </div>
            </form>
        </div>
    @else
        <div class="alert alert-danger">Only first level admins can edit achievements</div>
    @endif
@endsection