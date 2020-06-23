@extends('layouts.index')
@section('center')

<section class="section-about">

    <div id="paymentDetail" class="container text-center" style="display: none;">
        <div class="card text-center" style="width: 50rem;">
            <div class="card-header">
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
    <div id="personalinfo" class="container">        
        <div class="class-form">            
            <form class="bg-light shadow form" id="razorform" name="razorform">
                {{csrf_field()}}
                <div class="form-row">
                    <div class="col-lg-5 offset-lg-1 form-group">
                        <h5 class="text-justify text-success"><strong>Personal Information</strong></h5>
                    </div>
                    <div class="col-lg-5 form-group">
                        <h4 class="text-justify text-success"><strong>Donation Amount :  {{$donation_amount }}</strong></h4>
                        <input type="hidden" id="donationAmount" name="donationAmount" value="{{$donation_amount}}">
                        <input type="hidden" id="donationName" name="donationName" value="{{$donation_name}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-10 offset-lg-1 form-group">
                        <p class="text-justify">Note: Please fill your details carefully and recheck once before donating because your tax exemption certificate will be instantly generate online
                    </div>
                </div>

                <div class="row">
                    <div class="col offset-lg-1">
                        <input type="radio" name="nationality" id="nationality" value="indian" checked/> Indian Citizen
                    </div>
                    <div class="col">
                        <input type="radio" name="nationality" id="nationality" value="foreign"/> Foreign Citizen
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-lg-5 offset-lg-1 form-group">
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Firstname" required/>
                    </div>
                    <div class="col-lg-5 form-group">
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Lastname" required/>
                    </div>
                </div>
               
                <div class="form-row">
                    <div class="col-lg-5 offset-lg-1 form-group">
                        <input type="email"  name="email" id="email" class="form-control" placeholder="Email" required/>
                    </div>
                    <div id="pan_div" class="col-lg-5 form-group">
                        <input type="text" name="pan" id="pan" class="form-control" placeholder="PAN" required/>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="col-lg-5 offset-lg-1 form-group">
                        <textarea class="form-control" name="address" id="address" placeholder="Address" rows="5" required></textarea>
                    </div>
                    <!--<div class="col-lg-5 form-group">
                        <input type="text" class="form-control" name="aadhar" id="aadhar" placeholder="Aadhar" required>                       
                    </div> -->
                    <div id="passport_div" class="col-lg-5 form-group" style="display: none;">
                        <input type="text" class="form-control" name="passport" id="passport" placeholder="Passport">                       
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="col-lg-4 offset-lg-1 form-group">
                            <input type="text" class="form-control" name="city" id="city" placeholder="City" required/>
                    </div>
                    <div id="state_div" class="col-lg-4 form-group">
                        <select class="form-control" name="state" id="state">
                            <option value="">Please Select</option> 
                            @foreach ($states['states'] as $state)
                                <option value="{{$state['state']}}">{{ $state['state'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div id="country_div" class="col-lg-4 form-group" style="display: none;">
                        <input type="text" class="form-control" name="country" id="country" placeholder="Country"/>
                    </div>
                    <div class="col-lg-2 form-group">
                        <input type="text" class="form-control" name="pin" id="pin" placeholder="PinCode" required/>
                    </div>
                </div>
       
                <div class="form-row">
                    <div class="col-lg-5 offset-lg-1 form-group">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required/>
                    </div>
                    <div class="col-lg-3 form-group">
                        
                    </div>
                </div>
       
                <div class="form-row">
                    <div class="col-lg-5 offset-lg-1 text-left form-group">
                        <button class="btn bg-success text-white btn-md btn-block" id="paybtn" type="button">Proceed to Payment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    $('#razorform input[name="nationality"]').change(function(e) { 
        $('#razorform input[name="nationality"]:checked').each(function() {
            var value = $(this).val();
            //alert("value = "+value);
            if(value=='indian'){
                //alert('setting required');
                $('#passport_div').attr('style', 'display: none;');
                $('#razorform input[name="pan"]').attr("required", true);
                $("#pan_div").removeAttr('style');  
                $('#razorform input[name="passport"]').removeAttr('required');

                $('#country_div').attr('style', 'display: none;');
                $('#razorform input[name="state"]').attr("required", true);
                $("#state_div").removeAttr('style');  
                $('#razorform input[name="country"]').removeAttr('required');                          
            } else {
                $('#pan_div').attr('style', 'display: none;');
                $('#razorform input[name="passport"]').attr("required", true);
                $("#passport_div").removeAttr('style'); 
                $('#razorform input[name="pan"]').removeAttr('required');
                
                $('#state_div').attr('style', 'display: none;');
                $('#razorform input[name="country"]').attr("required", true);
                $("#country_div").removeAttr('style'); 
                $('#razorform input[name="state"]').removeAttr('required');
            }
        });
    });

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
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var address = $('#address').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var pan = $('#pan').val();
        var pin = $('#pin').val();
        var aadhar = $('#aadhar').val();
        var passport = $('#passport').val();
        var city = $('#city').val();
        var country = $('#country').val();
        var state = $('#state').val();
        var donationAmt = $('#donationAmount').val();
        var donationName = $('#donationName').val();
        //var isindian = $('#isindian').is(':checked');
        //var isforeign = $('#isforeign').is(':checked');
        var nationality = $("input[name='nationality']:checked").val();
        var name=firstname +" "+lastname;
        //var nationality = '';        
        console.log('nationality = ' +nationality);
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
                "name": name ,
                "address" : address,
                "email" : email,
                "phone" : phone,
                "pan" : pan,
                "aadhar" : aadhar,
                "passport": passport,
                "city" : city,
                "state" : state,
                "country" : country,
                "pin" : pin,
                "nationality" : nationality,
                "donation_amount" : donationAmt,
                "donation_for" : donationName

            },
            success: function (data,status, XHR) {
                console.log('complete' + XHR);
                console.log(data.user_donation_id);
                //$('#user_order_id').text(data.user_order_id);
                $('#user_donation_id').text(data.user_donation_id);
                //$('#ord_id').val(data.order_id);
                $("#personalinfo").hide();
            }
        })
    }
</script>
<script>
    var donationAmt = $('#donationAmount').val();
    var email = $('#email').val();
    var options = {
        key: "{{ env('RAZORPAY_KEY') }}",
        amount: $('#donationAmount').val() * 100,
        name: 'GreenIndiaTrust',
        description: 'Donation',        
        image: '{{asset('new/img/Green_India_Logo.jpg')}}',
        handler: demoSuccessHandler,
        prefill: {
          contact: $('#phone').val(),
          email: $('#email').val()
        }
    }
</script>
<script>
    
    document.getElementById('paybtn').onclick = function () {
        var firstname1 = $('#firstname').val();
        var lastname1 = $('#lastname').val();
        var address1 = $('#address').val();
        var email1 = $('#email').val();
        var phone1 = $('#phone').val();
        var pan1 = $('#pan').val();
        var pin1 = $('#pin').val();
        //var aadhar = $('#aadhar').val();
        var passport1 = $('#passport').val();
        var city1 = $('#city').val();
        var country1 = $('#country').val();
        var state1 = $('#state').val();
        var nationality = $("input[name='nationality']:checked").val();
        //alert('nationalty = '+nationality);
        //var isindian1 = $('#isindian').is(':checked');
        //var isforeign1 = $('#isforeign').is(':checked');
        //alert("isindian = "+isindian+",isforeign = "+isforeign);
        //alert('fistname = '+firstname+',lastname = '+lastname+',address = '+address+',email='+email+',phone = '+phone);
        //alert('pan1='+ pan1 +',pin = '+pin1+',passport = '+passport1+',city='+city1+',state='+state1);
        if(firstname1 == '' || lastname1 =='' || address1 =='' || email1 =='' || phone1 =='' ||
             pin1 =='' || city1 =='') {
                alert('Please enter Required Fields...');
                return;
            }
        if(nationality =='indian' && pan1 =='') {
            alert('Please enter Pan ');
            return;
        } else if(nationality=="foreign" && passport1=='') {
            alert('Please enter Passport ');
            return;
        }

        if(nationality =='indian' && state1 =='') {
            alert('Please enter State');
            return;
        } else if(nationality=="foreign" && country1=='') {
            alert('Please enter Country');
            return;
        }

        options = {
        key: "{{ env('RAZORPAY_KEY') }}",
        amount: $('#donationAmount').val() * 100,
        name: 'GreenIndiaTrust',
        description: 'Donation',        
        image: '{{asset('new/img/Green_India_Logo.jpg')}}',
        handler: demoSuccessHandler,
        prefill: {
          contact: $('#phone').val(),
          email: $('#email').val()
        }
    }
      options.amount = $('#donationAmount').val() * 100;
      //alert('op - > ' + options);
        window.r = new Razorpay(options);
        r.open()
    }
    
</script>
@endsection