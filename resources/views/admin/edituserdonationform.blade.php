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

    <form action="{{ route('adminUpdateUserDonation',['id' => $userdonation->id ])}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label for="campaign_name">Name</label>
            <input type="text" class="form-control" readonly name="name" id="name" value="{{$userdonation->name}}">
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" name="address" id="address" rows="5" cols="50" disabled>{{$userdonation->address}}</textarea>
        </div>

        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" readonly name="city" id="city" value="{{$userdonation->city}}">
        </div>

        <div class="form-group">
            <label for="state">State</label>
            <input type="text" class="form-control" readonly name="state" id="state" value="{{$userdonation->state}}">
        </div>

        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" readonly name="email" id="email" value="{{$userdonation->email}}">
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" readonly name="phone" id="phone" value="{{$userdonation->phone}}">
        </div>
        <div class="form-group">
            <label for="pan">Pan</label>
            <input type="text" class="form-control" readonly name="pan" id="pan" value="{{$userdonation->pan}}">
        </div>

        <div class="form-group">
            <label for="aadhar">Aadhar</label>
            <input type="text" class="form-control" readonly name="aadhar" id="aadhar" value="{{$userdonation->aadhar}}">
        </div>

        <div class="form-group">
            <label for="donation_date">Donation Date</label>
            <input type="text" class="form-control" readonly name="donation_date" id="donation_date" value="{{$userdonation->donation_date}}">
        </div>

        <div class="form-group">
            <label for="donation_amount">Donation Amount</label>
            <input type="text" class="form-control" readonly name="donation_amount" id="donation_amount" value="{{$userdonation->donation_amount}}">
        </div>

        <div class="form-group">
            <label for="payment_id">Razorpay Id</label>
            <input type="text" class="form-control" readonly name="payment_id" id="payment_id" value="{{$userdonation->payment_id}}">
        </div>

        <div class="form-group">
            <label for="user_donation_id">User Donation Id</label>
            <input type="text" class="form-control" readonly name="user_donation_id" id="user_donation_id" value="{{$userdonation->user_donation_id}}">
        </div>    

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit </button>
            <button class="btn btn-primary" type="reset">Reset </button>
            <a href="{{route('adminDisplayUserDonations')}}" class="btn btn-primary">Cancel</a>
        </div>
    </form>
     
</div>

@endsection