@extends('layouts.index')
@section('center')
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h6><strong>{{ $fundraise->campaign_name}}</strong></h6>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h6>Created By : {{ $fundraise->first_name . ' ' . $fundraise->last_name}}</h6>
        </div>
    </div>
    <div class="row">
        <div class="col"><img src="{{asset ('storage')}}/images/{{$fundraise->campaign_image}}" width="380px" height="300px"></div>
        <div class="col">
            <div class="card" style="max-width: 25rem;">
                <div class="card-header">
                    <h6><strong>Campaign Goal Rs. {{ $fundraise->campaign_amount}}</strong></h6>
                    @php
                        $remaining_amount =  $fundraise->campaign_amount - $fundraise->donation_raised_so_far;
                    @endphp
                </div>
                <div class="card-body">
                    <div class="text-success">
                        <canvas data-bs-chart="{&quot;type&quot;:&quot;pie&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Raised So Far&quot;,&quot;Remaining&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Raised&quot;,&quot;backgroundColor&quot;:[&quot;#135e11&quot;,&quot;rgba(91,20,20,0.1)&quot;],&quot;borderColor&quot;:[&quot;#e1a407&quot;,&quot;#e1a407&quot;],&quot;data&quot;:[&quot;{{$fundraise->donation_raised_so_far}}&quot;,&quot;{{$remaining_amount}}&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;reverse&quot;:false},&quot;title&quot;:{&quot;display&quot;:false,&quot;fontColor&quot;:&quot;#338836&quot;}}}"></canvas></div>
                </div>
                <div class="text-center card-footer">
                <h6><strong>Raised So Far Rs. {{ $fundraise->donation_raised_so_far}} </strong></h6>
                </div>
            </div>
        </div>
        <form id="equipmentultraform" name="equipmentultraform" action="{{ route('personalDetail')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col">
                <div class="card" style="max-width: 22rem;">
                    <div class="card-header">
                        <h6>Raised Funds can plant 100 trees</h6>
                    </div>
                    
                        <input type="hidden" name="donation_amount" id="donation_amount" value="">
                        <input type="hidden" value="{{$fundraise->campaign_name}}" name="donation_name">
                        <div class="card-body">
                            <div class="row">
                                <div class="col"><label>Start Date</label>
                                    <h6><strong>{{ $fundraise->start_date}}</strong></h6>
                                </div>
                                <div class="col"><label>End Date</label>
                                    <h6><strong>{{ $fundraise->end_date}}</strong></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h6>Choose Your Donation Amount</h6>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-3">
                                    <button id="250" name="250" class="btn btn-success bg-success" type="button">250</button>
                                </div>
                                <div class="col-3">
                                    <button id="500" name="500" class="btn btn-success bg-success" type="button">500</button>
                                </div>
                                <div class="col-3">
                                    <button id="1000" name="1000" class="btn btn-success bg-success" type="button">1000</button>
                                </div>
                                <div class="col-3">
                                    <button id="1500" name="1500" class="btn btn-success bg-success" type="button">1500</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-2 col-6">
                                    <label class="col-form-label">Rs.&nbsp;</label>
                                </div>
                                <div class="col-lg-8 col-6">
                                    <input type="text" id="otheramount" name="otheramount" class="form-control" placeholder="Other Amount">
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="row text-center">
                    <div class="col">
                        <input id="continuedonation" name="continuedonation" type="submit" role="button" class="btn btn-success bg-success" value="Continue Donation">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h6><strong>CAMPAIGN OVERVIEW</strong></h6>
                </div>
                <div class="card-body">
                    <p class="text-justify">{{ $fundraise->campaign_desc}}<br><br></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h6><strong>CAMPAIGN DONORS</strong></h6>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled text-success">
                        @foreach ($user_donations as $user_donation)
                            <li>{{ $user_donation->name }}</li>
                        @endforeach                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<script src="{{ asset('js/bs-init.js')}}"></script>
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/chart.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $( "#250" ).click(function() {
            $(this).removeClass( "bg-success" ).addClass( "bg-primary" ); 
            $("#500").removeClass( "bg-primary" ).addClass( "bg-success" ); 
            $("#1000").removeClass( "bg-primary" ).addClass( "bg-success" ); 
            $("#1500").removeClass( "bg-primary" ).addClass( "bg-success" );
            $('#donation_amount').val('250'); 
            $('#otheramount').val('');         
        });
        $( "#500" ).click(function() {
            $(this).removeClass( "bg-success" ).addClass( "bg-primary" ); 
            $("#250").removeClass( "bg-primary" ).addClass( "bg-success" ); 
            $("#1000").removeClass( "bg-primary" ).addClass( "bg-success" ); 
            $("#1500").removeClass( "bg-primary" ).addClass( "bg-success" ); 
            $('#donation_amount').val('500'); 
            $('#otheramount').val('');           
        });
        $( "#1000" ).click(function() {
            $(this).removeClass( "bg-success" ).addClass( "bg-primary" ); 
            $("#250").removeClass( "bg-primary" ).addClass( "bg-success" ); 
            $("#500").removeClass( "bg-primary" ).addClass( "bg-success" ); 
            $("#1500").removeClass( "bg-primary" ).addClass( "bg-success" ); 
            $('#donation_amount').val('1000'); 
            $('#otheramount').val('');           
        });
        $( "#1500" ).click(function() {
            $(this).removeClass( "bg-success" ).addClass( "bg-primary" ); 
            $("#250").removeClass( "bg-primary" ).addClass( "bg-success" ); 
            $("#500").removeClass( "bg-primary" ).addClass( "bg-success" ); 
            $("#1000").removeClass( "bg-primary" ).addClass( "bg-success" );  
            $('#donation_amount').val('1500');   
            $('#otheramount').val('');        
        });
        $( "#otheramount" ).change(function() {
            $('#donation_amount').val(this.value);
            $("#250").removeClass( "bg-primary" ).addClass( "bg-success" ); 
            $("#500").removeClass( "bg-primary" ).addClass( "bg-success" ); 
            $("#1000").removeClass( "bg-primary" ).addClass( "bg-success" ); 
            $("#1500").removeClass( "bg-primary" ).addClass( "bg-success" );  
        });
        $( "#equipmentultraform" ).submit(function( event ) {
            //alert( "Handler for .submit() called." );
            var donation_amount = $('#donation_amount').val();            
            if(donation_amount == ''){
                alert('Please select any Donation Amount or Enter Other Amount to Donate');
                event.preventDefault();
            }
        });
    });
</script>
@endsection