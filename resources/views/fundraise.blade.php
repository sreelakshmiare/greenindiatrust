@extends('layouts.index')
@section('center')

<section class="section-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h4 class="text--justify text-success">Create Your Own Campaign</h4>
                <p class="text-justify text-success"><img src="{{ asset('img/fundraisetrancycycle.png')}}"></p>
            </div>
            <div class="col-lg-6">
                <div class="bg-white border rounded-0 shadow">
                    <form action="{{ route('sendCreateFundraiseForm')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <br>
                        <h5 class="text-center text-success"><strong>Fundraise Form</strong></h5>
                        <div class="shadow-sm form-row">
                            <div class="form-group col-md-6"><input class="form-control" type="text" name="first_name" id="first_name" placeholder="Firstname" required=""></div>
                            <div class="form-group col-md-6"><input class="form-control" type="text" name="last_name" id="last_name" placeholder="Lastname" required=""></div>
                            <div class="form-group col-md-12"><input class="form-control" type="email" name="email" id="email" placeholder="Email"></div>
                            <div class="form-group col-md-6"><input class="form-control" type="text" name="mobile" id="mobile" placeholder="Mobile Number" required=""></div>
                            <div class="form-group col-md-12"><input class="form-control" type="text" name="campaign_name" id="campaign_name" placeholder="Campaingn Name" required=""></div>
                            <div class="form-group col-md-12"><input class="form-control" type="text" name="campaign_amount" id="campaign_amount" placeholder="Campaingn Amount" required=""></div>
                            <div class="form-group col-md-6"><label>Campaign Start Date</label><input class="form-control" type="date" name="start_date" id="start_date" placeholder="Start Date" required=""></div>
                            <div class="form-group col-md-6"><label>Campaign End Date</label><input class="form-control" type="date" name="end_date" id="end_date" placeholder="End Date" required=""></div>
                            <div class="form-group col-md-12"><textarea class="form-control" name="campaign_desc" id="campaign_desc" placeholder="Campaingn Description" required=""></textarea></div>
                            <div class="form-group col-md-12">
                                <label for="campaign_image">Upload Campaign Image</label>
                                <input type="file" class="form-control" name="campaign_image" id="campaign_image" placeholder="Campaign Image">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="campaign_image">Upload Campaign Video</label>
                                <input type="file" class="form-control" name="campaign_video" id="campaign_video" placeholder="Campaign Video">
                            </div>
                            <div class="text-right form-group col-md-6">
                                <button class="btn btn-success btn-sm text-center" type="submit">Submit For Approval </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection