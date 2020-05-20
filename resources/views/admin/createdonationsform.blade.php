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
    <form action="{{ route('adminSendCreateDonationsForm')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <h2 class="text-center">Create New Donations</h2>

        <div class="form-group">
            <label for="donation_name">Donation Name</label>
            <input type="text" class="form-control" name="donation_name" id="donation_name" required>
        </div>

        <div class="form-group">
            <label for="donation_description">Donation Description</label>
            <textarea class="form-control" name="donation_description" id="donation_description"></textarea>
        </div>

        <div class="form-group">
            <label for="donation_amount">Donation Amount</label>
            <input type="text" class="form-control" name="donation_amount" id="donation_amount" required>
        </div>

        <div class="form-group">
            <label for="category_id">Categories</label>
            <select class="form-control" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach                         
            </select>
        </div>

        <div class="form-group">
            <label for="donation_image">Donation Image</label>
            <input type="file" class="form-control"  name="donation_image" id="donation_image">
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
            <a href="{{route('adminDisplayDonations')}}" class="btn btn-primary">Cancel</a>
        </div>
    </form>
</div>

@endsection