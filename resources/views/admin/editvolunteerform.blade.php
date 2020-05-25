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

    <form action="{{ route('adminUpdateVolunteer',['id' => $volunteer->id ])}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label for="Name">Areas of Interest</label>
            <input type="text" class="form-control" readonly name="areasofinterest" id="areasofinterest" value="{{$volunteer->areasofinterest}}">
        </div>

        <div class="form-group">
            <label for="periodofvolunteer">Volunteer Period</label>
            <input type="text" class="form-control" readonly name="periodofvolunteer" id="periodofvolunteer" value="{{$volunteer->periodofvolunteer}}">            
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" readonly name="email" id="email" value="{{$volunteer->email}}">
        </div>

        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" class="form-control" readonly name="mobile" id="mobile" value="{{$volunteer->mobile}}">
        </div>

        <div class="form-group">
            <label for="address">Mobile</label>
            <textarea class="form-control" readonly name="address" id="address">{{$volunteer->address}}</textarea>
        </div>

        <div class="form-group">
            <label for="education">Education</label>
            <input type="text" class="form-control" readonly name="education" id="education" value="{{$volunteer->education}}">
        </div>

        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" readonly name="Name" id="Name" value="{{$volunteer->first_name}} {{$volunteer->last_name}}">
        </div>

        <div class="form-group">
            <label for="emergency">Emergency Contact and Phone Number</label>
            <input type="text" class="form-control" readonly name="emergency" id="emergency" value="{{$volunteer->emergency_contact_name}} -- {{$volunteer->emergency_contact_phone}}">
        </div>

        <div class="form-group">
            <label for="gender">Gender and Age</label>
            <input type="text" class="form-control" readonly name="gender" id="gender" value="{{$volunteer->gender}} And  {{$volunteer->age}} Old">
        </div>   
        <div class="form-group">
            <label for="relocate">Relocate</label>
            <input type="text" class="form-control" readonly name="relocate" id="relocate" value="{{$volunteer->relocating}}">
        </div>
        
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit </button>
            <button class="btn btn-primary" type="reset">Reset </button>
            <a href="{{route('adminDisplayVolunteers')}}" class="btn btn-primary">Cancel</a>
        </div>
    </form>
     
</div>

@endsection