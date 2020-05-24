@extends('layouts.admin')

@section('body')

<div class="container">
    <div class="table-responsive table-bordered bg-light shadow-sm">
        <table class="table table-bordered table-hover table-sm">
            <thead class="bg-warning shadow-sm">
                <tr>
                    <th>Donation Id</th>
                    <th>Name</th>
                    <th>Donation For</th>
                    <th>Donation Amount</th> 
                    <th>Razorpay Id</th>          
                    <th>Edit</th>
                    <th>Remove</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($userdonations as $donation)                        
                    <tr>
                        <td>{{$donation['user_donation_id']}}</td>
                        <td>{{$donation['name']}}</td>
                        <td>{{$donation['donation_for']}}</td>
                        <td>{{$donation['donation_amount']}}</td>
                        <td>{{$donation['payment_id']}}</td>
                        <td><a href="{{ route('adminEditUserDonationForm',['id' => $donation['id'] ])}}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{ route('adminDeleteUserDonation',['id' => $donation['id'] ])}}"  class="btn btn-warning">Remove</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $userdonations->links() }}
</div>

@endsection