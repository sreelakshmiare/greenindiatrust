@extends('layouts.index')
@section('center')

<section class="section-about">

    <div id="paymentDetail" class="container text-center" style="display: none;">
        <div class="card text-center" style="width: 50rem;">
            <div class="card-header bg-success text-white">
                <h6 class="mb-0">Order Created Successfully - 
                    <strong>
                    <span id="user_donation_id"></span></strong> 
                    with Payment Id: <strong><span id="paymentID"></span></strong></h6>
            </div>
            <div class="card-body">
                <p class="card-text">Thank you for Donating for Green India Trust</p>
                  <div class="row">
                      <div class="col text-center">
                          <a href="/" class="btn btn-success bg-success text-center" type="button">Explore GIT</a>
                      </div>
                      <div class="col text-center d-none">
                        <form id="invoiceform"action="/invoice" method="post" target="_blank" enctype="multipart/form-data">
                          {{csrf_field()}}
                          <input type="hidden" name="ord_id" id="ord_id" value="">
                          <input type="hidden" name="user_ord_id" id="user_ord_id" value="">
                          <input class="btn btn-success" type="submit" value="Generate Receipt">
                        </form>
                      </div>
                  </div>
            </div>
        </div> 
        
        <br/><br/><br/><br/><br/><br/><br/><br/><br/>
    </div> 




    <div id="volunteer_div" class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h4 class="text--justify text-success">Volunteering Information</h4>
                <p class="text-justify text-success">Green India trust offers various opportunities and offers for you to get  involved to save our Mother Earth on which we live and our own ones who are in the dungeon of misfortunes and inabilities without a small hand of
                    support cannot come to life and “SURVIVAL”. <BR> <BR>Green India Trust understands that everyone has an inner passion and  love towards the suffering lives around the globe and to save our  natural resources, the
                    Nature’s Gift, the planet, but they are not given “A RIGHT OPPORTUNITY for a GENUINE “and Worth Spending for their  contribution. <BR><BR>Green India Trust’s accountable and transparent structure and voluntary service
                    designs and facilitates few innovative, feasible and worthy opportunities to serve the Earth, its resources and the very needy lives around. Weekly 5 days this schedule can be followed with changes according to the situation
                    and convenience of the team. <BR><BR>Green India Trust gives volunteering opportunities to our working as volunteer on Saturday or Sunday meet like-minded people. You can join us with your family especially children. We have different
                    kind of activities as Tree Plantation, Medical Camps, awareness for rural areas etc.  That we ask is for you to spend couple of hours with us on every Saturday or Sunday, just a will to see your home town turn clean, green
                    and better place tolive and enjoy for all.Brand Ambassador We need the speakers, communicator the environmentalists, the social  activist and the passionate individuals, who can drive our different  initiatives
                    from their institutions or organizations, housing society and locality.<br><br><br><br><br></p>
            </div>
            <div class="col-lg-6">
                <div class="bg-white border rounded-0 shadow">
                    <form name="volunteerform" id="volunteerform" action="{{ route('sendCreateVolunteerForm')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <br>
                        <h5 class="text-center text-success"><strong>Volunteer Application Form</strong></h5>
                        <div class="shadow-sm form-row">
                            <div class="form-group col-md-6">
                                <input class="form-control" type="text" name="first_name" id="first_name" placeholder="Firstname" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Lastname" required>
                            </div>
                            <div class="form-group col-md-12">
                                <input class="form-control" type="email" name="email" id="email" placeholder="Email" required>
                            </div>                            
                            <div class="form-group col-md-6">
                                <input class="form-control" type="text" name="mobile" id="mobile" placeholder="Mobile Number" required>
                            </div>
                            <div class="form-group col-md-4">
                            <select class="form-control" name="gender" id="gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <input class="form-control" type="text" name="age" id="age" placeholder="Age" required>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" name="address" id="address" placeholder="Address" required></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <select class="form-control" name="education" id="education" required>
                                    <option value="">Select Education</option>
                                    <option value="Secondary Education">Secondary Education</option>
                                    <option value="Intermediate">Intermediate</option>
                                    <option value="Bachelors Degree">Bachelors Degree</option>
                                    <option value="PostGraduate">PostGraduate</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <select class="form-control" name="periodofvolunteer" id="periodofvolunteer" required>
                                    <option value="">Select Period of Volunteership</option>
                                    <option value="Weekdays">Weekdays</option>
                                    <option value="Weekends">Weekends</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <select class="form-control" name="areasofinterest" id="areasofinterest" required>
                                    <option value="" selected="">Select Areas of Interest</option>
                                    <option value="Administration Work">Administration Work</option>
                                    <option value="Events Organizing">Events Organizing</option>
                                    <option value="Fundraising for GIT">Fundraising for GIT</option>
                                    <option value="Teaching at Education Institution">Teaching at Education Institution</option>
                                    <option value="Creating Awareness for rural areas">Creating Awareness for rural areas</option>
                                    <option value="Social Media Relations Or Public Relation">Social Media Relations Or Public Relation</option>
                                    <option value="Health Care Expert Or Environmentalist">Health Care Expert Or Environmentalist</option>                                    
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Are You Relocating For conducting camps and events?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="relocating" name="relocating" value="Y" >
                                    <label class="form-check-label" for="relocating">Yes&nbsp;</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="relocating" name="relocating" value="N" checked>
                                    <label class="form-check-label" for="relocating">No</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Emergency Contact Details</label>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" type="text" name="emergency_contact_name" id="emergency_contact_name" placeholder="Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" type="text" name="emergency_contact_phone" id="emergency_contact_phone" placeholder="Mobile Number" required>
                            </div>
                            <div>
                                <label>Would You like to Donate?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="liketodonate" name="liketodonate" value="Y">
                                    <label class="form-check-label" for="liketodonate">
                                        Yes
                                    </label>                                    
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="liketodonate" name="liketodonate" value="N" checked>
                                    <label class="form-check-label" for="liketodonate">
                                        No
                                    </label>
                                </div>
                            </div>
                            <div id="donation_id" class="row" style="display: none;">
                                <div class="col-md-6">
                                    <label>Enter Donation Amount</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" name="donation_amount" id="donation_amount" placeholder="Donation Amount">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="acceptterms" name="acceptterms" value="Y">
                                    <label class="form-check-label" for="acceptterms">Accept the Terms and Conditions<br></label>
                                </div>
                            </div>
                            <div id="submit_div" class="text-right form-group col-md-6">
                                <button class="btn bg-success btn-md text-white text-center" type="submit">Submit</button>
                            </div>
                            <div id="razorpay_div"class="text-right form-group col-md-6" style="display: none;">
                                <button class="btn bg-success text-white btn-md btn-block" id="paybtn" type="submit">Submit</button>
                            </div>                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    $('#rzp-footer-form').submit(function (e) {
        var button = $(this).find('button');
        var parent = $(this);
        button.attr('disabled', 'true').html('Please Wait...');
        $.ajax({
            method: 'get',
            url: this.action,
            data: $(this).serialize(),
            complete: function (r) {
                console.log('complete');
                console.log(r);
            }
        })
        return false;
    })
</script>
 
<script>
    function padStart(str) {
        return ('0' + str).slice(-2)
    }

    function demoSuccessHandler(transaction) {
        // You can write success code here. If you want to store some data in database.
        $("#paymentDetail").removeAttr('style');
        $('#paymentID').text(transaction.razorpay_payment_id);
        var paymentDate = new Date();
        var firstname = $('#first_name').val();
        var lastname = $('#last_name').val();
        var address = $('#address').val();
        var email = $('#email').val();
        var phone = $('#mobile').val();
        var pan = $('#pan').val();
        var pin = $('#pin').val();
        var aadhar = $('#aadhar').val();
        var city = $('#city').val();
        var state = $('#state').val();
        var donationAmt = $('#donation_amount').val();
        var donationName = $('#areasofinterest').val();

        //alert('name = ' +name);
        $('#paymentDate').text(
                padStart(paymentDate.getDate()) + '.' + padStart(paymentDate.getMonth() + 1) + '.' + paymentDate.getFullYear() + ' ' + padStart(paymentDate.getHours()) + ':' + padStart(paymentDate.getMinutes())
                );

        $.ajax({
            method: 'post',
            url: "{!!route('doPayment')!!}",
            data: {
                "_token": "{{ csrf_token() }}",
                "razorpay_payment_id": transaction.razorpay_payment_id,
                "paymentDate": paymentDate,
                "name": firstname + lastname ,
                "address" : address,
                "email" : email,
                "phone" : phone,
                "pan" : "NA",
                "aadhar" : "NA",
                "city" : "NA",
                "state" : "NA",
                "pin" : "000000",
                "donation_amount" : donationAmt,
                "donation_for" : donationName

            },
            success: function (data,status, XHR) {
                console.log('complete' + XHR);
                console.log(data.user_donation_id);
                //$('#user_order_id').text(data.user_order_id);
                $('#user_donation_id').text(data.user_donation_id);
                //$('#ord_id').val(data.order_id);
                $("#volunteer_div").hide();
            }
        })
    }
</script>
<script>
    var donationAmt = $('#donation_amount').val();
    var email = $('#email').val();
    var options = {
        key: "{{ env('RAZORPAY_KEY') }}",
        amount: $('#donation_amount').val() * 100,
        name: 'GreenIndiaTrust',
        description: 'Donation',        
        image: '{{asset('new/img/Green_India_Logo.jpg')}}',
        handler: demoSuccessHandler,
        prefill: {
          contact: $('#mobile').val(),
          email: $('#email').val()
        }
    }
</script>
<script>
    
    document.getElementById('paybtn').onclick = function () {         
        var firstname = $('#first_name').val();
        var lastname = $('#last_name').val();
        var address = $('#address').val();
        var email = $('#email').val();
        var phone = $('#mobile').val();       
        var donationAmt = $('#donation_amount').val();
        var donationName = $('#areasofinterest').val();
        var terms = $('#acceptterms').is(':checked');
        console.log('terms = ' + terms);
        if(firstname=='' || lastname=='' || address=='' || email =='' ||
        donationAmt=='' || donationName =='' || terms==false) {
            return;
        }
        options = {
        key: "{{ env('RAZORPAY_KEY') }}",
        amount: $('#donation_amount').val() * 100,
        name: 'GreenIndiaTrust',
        description: 'Donation',        
        image: '{{asset('new/img/Green_India_Logo.jpg')}}',
        handler: demoSuccessHandler,
        prefill: {
          contact: $('#mobile').val(),
          email: $('#email').val()
        }
    }
      options.amount = $('#donation_amount').val() * 100;
      //alert('op - > ' + options);
        window.r = new Razorpay(options);
        r.open()
    }
    
</script>
<script>
    $( "#volunteerform" ).submit(function( event ) {
        console.log("terms = "+ $('#acceptterms').is(':checked'));

        $('#volunteerform input[name="liketodonate"]:checked').each(function() {
            var value = $(this).val();
            //alert("value = "+value);
            if(value=='Y'){
                event.preventDefault();               
            } 
        });


        if($('#acceptterms').is(':checked'))
        {
            alert( "Thank You for Your Interest in Volunteering for Green India. We will Contact you Soon. Mean while Please check our Active Fundraising Campaigns." );
        } else {
            alert('Please accept Terms and Conditions. ');
            event.preventDefault();
        }       
    });

    $('#volunteerform input[name="liketodonate"]').change(function(e) { 
        $('#volunteerform input[name="liketodonate"]:checked').each(function() {
            var value = $(this).val();
            //alert("value = "+value);
            if(value=='N'){
                //alert('setting required');
                $('#donation_id').attr('style', 'display: none;');
                $('#razorpay_div').attr('style', 'display: none;');
                $("#submit_div").removeAttr('style');
                $('#volunteerform input[type="text"]').removeAttr('required');                
            } else {
                $("#donation_id").removeAttr('style');
                $('#submit_div').attr('style', 'display: none;');
                $("#razorpay_div").removeAttr('style');
                $('#volunteerform input[type="text"]').attr("required", true);
                
            }
        });
    });
</script>
@endsection