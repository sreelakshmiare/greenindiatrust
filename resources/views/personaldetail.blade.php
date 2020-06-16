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
    <div id="personalinfo" class="container">        
        <div class="class-form">            
            <form class="bg-light shadow form" id="razorform" name="razorform">
                {{csrf_field()}}
                <div class="form-row">
                    <div class="col-lg-5 offset-lg-1 form-group">
                        <h4 class="text-justify text-success"><strong>Personal Information</strong></h4>
                    </div>
                    <div class="col-lg-5 form-group">
                        <h6 class="text-justify text-success"><strong>Donation Amount :  {{$donation_amount }}</strong></h6>
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
                        <input type="checkbox" name="isindian" id="isindian" /> Indian Citizen
                    </div>
                    <div class="col">
                        <input type="checkbox" name="isforeign" id="isforeign" /> Foreign Citizen
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
                    <div class="col-lg-5 form-group">
                        <input type="text" name="pan" id="pan" class="form-control" placeholder="PAN" required/>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="col-lg-5 offset-lg-1 form-group">
                        <textarea class="form-control" name="address" id="address" placeholder="Address" rows="5" required></textarea>
                    </div>
                    <div class="col-lg-5 form-group">
                        <input type="text" class="form-control" name="aadhar" id="aadhar" placeholder="Aadhar" required>                       
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="col-lg-4 offset-lg-1 form-group">
                            <input type="text" class="form-control" name="city" id="city" placeholder="City" required/>
                    </div>
                    <div class="col-lg-4 form-group">
                        <select class="form-control" name="state" id="state" required>
                            <option value="">Please Select</option> 
                            @foreach ($states['states'] as $state)
                                <option value="{{$state['state']}}">{{ $state['state'] }}</option>
                            @endforeach
                        </select>
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
        var city = $('#city').val();
        var state = $('#state').val();
        var donationAmt = $('#donationAmount').val();
        var donationName = $('#donationName').val();
        var isindian = $('#isindian').is(':checked');
        var isforeign = $('#isforeign').is(':checked');
        var name=firstname +" "+lastname;
        var nationality = '';
        if(isindian)
            nationality = 'Indian';
        else if(isforeign)
            nationality = 'Foreigner';
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
                "name": name ,
                "address" : address,
                "email" : email,
                "phone" : phone,
                "pan" : pan,
                "aadhar" : aadhar,
                "city" : city,
                "state" : state,
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
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var address = $('#address').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var pan = $('#pan').val();
        var pin = $('#pin').val();
        var aadhar = $('#aadhar').val();
        var city = $('#city').val();
        var state = $('#state').val();
        var isindian = $('#isindian').is(':checked');
        var isforeign = $('#isforeign').is(':checked');
        if(firstname == '' || lastname=='' || address=='' || email=='' || phone=='' ||
            pan=='' || pin=='' || aadhar == '' || city=='' || state=='' || (!isindian && !isforeign)) {
                alert('Please enter Required Fields..');
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