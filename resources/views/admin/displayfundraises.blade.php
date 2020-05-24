@extends('layouts.admin')

@section('body')

<div class="container">
    <div class="table-responsive table-bordered bg-light shadow-sm">
        <table class="table table-bordered table-hover table-sm">
            <thead class="bg-warning shadow-sm">
                <tr>
                    <th>#id</th>
                    <th>Campaign Name</th>
                    <th>Campaign Amount</th>
                    <th>Amount Donated</th>   
                    <th>Status</th>        
                    <th>Edit</th>
                    <th>Remove</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($fundraises as $fundraise)                        
                    <tr>
                        <td>{{$fundraise['id']}}</td>
                        <td>{{$fundraise['campaign_name']}}</td>
                        <td>{{$fundraise['campaign_amount']}}</td>
                        <td>{{$fundraise['donation_raised_so_far']}}</td>
                        <td>{{$fundraise['campaign_status']}}</td>
                        <td><a href="{{ route('adminEditFundraiseForm',['id' => $fundraise['id'] ])}}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{ route('adminDeleteFundraise',['id' => $fundraise['id'] ])}}"  class="btn btn-warning">Remove</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $fundraises->links() }}
</div>

@endsection