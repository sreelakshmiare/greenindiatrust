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

    <form action="{{ route('adminUpdateFundraise',['id' => $fundraise->id ])}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label for="campaign_name">Campaign Name</label>
        <input type="text" class="form-control" readonly name="campaign_name" id="campaign_name" value="{{$fundraise->campaign_name}}">
        </div>

        <div class="form-group">
            <label for="campaign_desc">Campaign Description</label>
            <textarea class="form-control" readonly name="campaign_desc" id="campaign_desc">{{$fundraise->campaign_desc}}</textarea>
        </div>

        <div class="form-group">
            <label for="campaign_amount">Campaign Amount</label>
            <input type="text" class="form-control" readonly name="campaign_amount" id="campaign_amount" value="{{$fundraise->campaign_amount}}">
        </div>

        <div class="form-group">
            <label for="donation_raised_so_far">Amount Donated So far</label>
            <input type="text" class="form-control" name="donation_raised_so_far" id="donation_raised_so_far" value="{{$fundraise->donation_raised_so_far}}">
        </div>

        <div class="form-group">
            <label for="campaign_amount">Campaign Raised By</label>
            <input type="text" class="form-control" readonly name="campaign_amount" id="campaign_amount" value="{{$fundraise->first_name}} {{$fundraise->last_name}}">
        </div>

        <div class="form-group">
            <label for="campaign_amount">Campaign Dates</label>
            <input type="text" class="form-control" readonly name="campaign_amount" id="campaign_amount" value="{{$fundraise->start_date}} To {{$fundraise->end_date}}">
        </div>   
    
        <div class="form-group">
            <label for="campaign_status">Status</label>
            <select class="form-control" name="campaign_status">             
                <option value="Created"
                    @if ('Created' == $fundraise->campaign_status)
                        selected="selected"
                    @endif
                    >Created</option>

                    <option value="Open for Discussion"
                    @if ('Open for Discussion' == $fundraise->campaign_status)
                        selected="selected"
                    @endif
                    >Open for Discussion</option>

                    <option value="In Progress"
                    @if ('In Progress' == $fundraise->campaign_status)
                        selected="selected"
                    @endif
                    >In Progress</option>

                    <option value="Goal Reached"
                    @if ('Goal Reached' == $fundraise->campaign_status)
                        selected="selected"
                    @endif
                    >Goal Reached</option>

                    <option value="Completed"
                    @if ('Completed' == $fundraise->campaign_status)
                        selected="selected"
                    @endif
                    >Completed</option>

                    <option value="Closed"
                    @if ('Closed' == $fundraise->campaign_status)
                        selected="selected"
                    @endif
                    >Closed</option>
            </select>
        </div>

        <div class="form-group">
            <label for="active_ind">Active</label>
            <select class="form-control" name="active_ind">
                <option value="Y"
                    @if ('Y' == $fundraise->active_ind)
                        selected="selected"
                    @endif
                    >Y</option>

                    <option value="N"
                    @if ('N' == $fundraise->active_ind)
                        selected="selected"
                    @endif
                    >N</option>
            </select>
        </div>

        <div class="form-group">
            <label for="campaign_image">Update Campaign Image</label>
            <input type="file" class=""  name="campaign_image" id="campaign_image" placeholder="Campaign Image">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit </button>
            <button class="btn btn-primary" type="reset">Reset </button>
            <a href="{{route('adminDisplayFundraises')}}" class="btn btn-primary">Cancel</a>
        </div>
    </form>
    <h4>Current Campaign Image</h4>
    <div>        
        <img src="{{asset ('storage')}}/images/{{ $fundraise->campaign_image }}" width="100" height="100" style="max-height:220px" >
    </div>  
</div>

@endsection