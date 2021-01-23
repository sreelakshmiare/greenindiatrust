@extends('layouts.index')
@section('center')
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h4 class="text-success">Active Fundraising Campaigns</h4>
        </div>
        <div class="col">
            <a href="{{route('fundraise')}}" class="btn btn-primary btn-lg bg-success text-white">Create Fundraise</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="card-deck">
        <div class="row" style="margin-top: 5px">
            @foreach($fundraiselist as $fundraise)
                @php
                    $startDate = strtotime($fundraise->start_date); 
                    $endDate = strtotime($fundraise->end_date);   
                @endphp
                <div class="col-lg-3"  style="margin-top: 15px">
                    <div class="card">
                        <!--<div class="card-header"><small>Text</small></div> -->
                        <img class="card-img-top" src="{{asset ('storage')}}/images/{{$fundraise->campaign_image}}" />
                        <div class="card-body">
                            <h5 class="card-title">{{$fundraise->campaign_name}}</h5>
                            <p class="card-text">By <strong>{{$fundraise->first_name .' '. $fundraise->last_name}}</strong> on {{$fundraise->created_at}}</p>
                            <p class="card-text">{{$fundraise->campaign_desc}}</p>
                            <p class="card-text">Days Left : {{ round(($endDate - $startDate) / 86400) }} Days</p>
                            <h6><strong>Goal Donation: Rs. {{$fundraise->campaign_amount}}</strong></h6>
                        </div>
                        <div class="card-footer bg-success text-white text-center">
                            <a href="{{ route('findFundraise',['id' => $fundraise->id ])}}" class="btn bg-success text-white">View More</a>
                        </div>
                    </div>
                </div>
            @endforeach            
        </div>        
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
@endsection