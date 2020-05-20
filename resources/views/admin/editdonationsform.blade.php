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

    <form action="{{ route('adminUpdateDonations',['id' => $donations->id ])}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label for="donation_name">Donation Name</label>
        <input type="text" class="form-control" name="donation_name" id="donation_name" value="{{$donations->donation_name}}" required>
        </div>

        <div class="form-group">
            <label for="donation_description">Donation Description</label>
            <textarea class="form-control" name="donation_description" id="donation_description">{{$donations->donation_description}}</textarea>
        </div>

        <div class="form-group">
            <label for="donation_amount">Donation Amount</label>
            <input type="text" class="form-control" name="donation_amount" id="donation_amount" value="{{$donations->donation_amount}}" required>
        </div>
    
        <div class="form-group">
            <label for="category_id">Categories</label>
            <select class="form-control" name="category_id">               
                @foreach ($categories as $category)                        
                    <option value="{{ $category->id }}"
                    @if ($category->id == $donations->category_id)
                        selected="selected"
                    @endif
                    >{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="active_ind">Active</label>
            <select class="form-control" name="active_ind">
                <option value="Y"
                    @if ('Y' == $donations->active_ind)
                        selected="selected"
                    @endif
                    >Y</option>

                    <option value="N"
                    @if ('N' == $donations->active_ind)
                        selected="selected"
                    @endif
                    >N</option>
            </select>
        </div>

        <div class="form-group">
            <label for="donation_image">Update Donation Image</label>
            <input type="file" class=""  name="donation_image" id="donation_image" placeholder="Donation Image">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit </button>
            <button class="btn btn-primary" type="reset">Reset </button>
            <a href="{{route('adminDisplayDonations')}}" class="btn btn-primary">Cancel</a>
        </div>
    </form>
    <h4>Current DonationImage</h4>
    <div>        
        <img src="{{asset ('storage')}}/images/{{ $donations->donation_image }}" width="100" height="100" style="max-height:220px" >
    </div>  
</div>

@endsection