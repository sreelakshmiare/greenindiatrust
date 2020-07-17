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
                                    <label class="form-check-label" for="acceptterms">Accept the <a href="#" data-toggle="modal" data-target="#terms">Terms and Conditions</a><br></label>
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
    <div role="dialog" tabindex="-1" class="modal fade show" id="terms" style="display: none;">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Terms and Conditions</h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
            
                                <p class="text-justify text-success">The Website Owner, including subsidiaries and affiliates 
                                ('Website' or Website Owner' or 'we' or 'us' or 'our') provides the information contained on 
                                the website or any of the pages comprising the website ('website') to visitors ('visitors') 
                                (cumulatively referred to as 'you' or 'your' hereinafter) subject to the terms and conditions 
                                set out in these website terms and conditions, the privacy policy and any other relevant terms
                                 and conditions, policies and notices which may be applicable to a specific section or module
                                  of the website.
                                  </p>
                            
                                <h4 class="text-justify text-success">Terms and Conditions</h4>
                                <p class="text-justify text-success">We are committed to ensuring that your information is secure. In order to prevent unauthorized access or disclosure, we have put in place
                                 suitable physical, electronic and managerial procedures to safeguard and secure the information we 
                                 collect online.
                                </p>
            
                                <p class="text-justify text-success">Green India Trust (here in after referred as GIT) offers services 
                                to its users which are subject to acceptance of following policy terms. GIT reserves the right to revise,
                                 amend or modify the policies entailed in this disclaimer at any time and in any manner as it may deem fit. 
                                 Any change or revision so effected will be posted on the site. We welcome you to our website. If you continue 
                                 to browse and use this website you are agreeing to comply with and be bound by the following terms and
                                  conditions of use, which together with our privacy policy govern GIT's relationship with you in relation
                                   to this website. The term 'GIT' or 'us' or 'we' refers to the owner of the website whose registered office 
                                   is 16/2/51, Beside S2 Cinema Hall Pogathota, Nellore-524001. Our NGO registration number is 92 bk IV and years of 2008
                                    and is registered in Nellore, AP, India. The term 'you' refers to the user or viewer of our website. 
                            
                                </p>
                                    
                            <h6 class= "text-justify text-success"><strong>The use of this website is subject to the following terms of use: </strong></h6>
                                 <ol class = "orderlist text-success">	
                                    <li class="text-justify text-success">The content of the pages of this website is for your general information and 
                                    use only. It is subject to change without notice.</li>
                                    
                                    <li class="text-justify text-success">Neither we, nor any third parties provide any warranty or guarantee as to the
                                     accuracy, timeliness, performance, completeness or suitability of the information and materials found 
                                     or offered on this website for any particular purpose. You acknowledge that such information and materials 
                                     may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors
                                      to the fullest extent permitted by law.</li>
                                    
                                    <li class="text-justify text-success">Your use of any information or materials on this website is entirely at your
                                     own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any
                                      products, services or information available through this website meet your specific requirements.</li>
                                    
                                    <li class="text-justify text-success">This website contains material which is owned by or licensed to us.
                                     This material includes, but is not limited to, the design, layout, look, appearance and graphics. 
                                     Reproduction is prohibited other than in accordance with the copyright notice, which forms part of 
                                     these terms and conditions.</li>
                                    
                                    <li class="text-justify text-success">All trademarks reproduced in this website which are not the property of, 
                                    or licensed to, the operator are acknowledged on the website. Unauthorized use of this website may 
                                    give rise to a claim for damages and/or be a criminal offence.</li>
                                    
                                    <li class="text-justify text-success">From time to time this website may also include links to other websites.
                                     These links are provided for your convenience to provide further information. They do not signify
                                      that we endorse the website(s). We have no responsibility for the content of the linked website.</li>
                                    
                                    <li class="text-justify text-success">You may not create a link to this website from another website or document
                                     without [business name]�s prior written consent.</li>
                                    
                                    <li class="text-justify text-success">Your use of this website and any dispute arising out of such use of the
                                     website is subject to the laws of India or other regulatory authority.</li>
                                </ol>
            
                                    
                                <p class="text-justify text-success"><strong>(A) Green India Services Description</strong><br/>
                                Green India trust is an NGO registered under Societies Act 21, 1860. It aims to create greenery
                                 on Earth with the contribution from corporate organizations, their employees, individuals,
                                  environmental agencies and funding entities.GIT gives its users an opportunity to select a 
                                  site from listed options to plant trees. We use internet and associated information technology 
                                  enabled processes to ensure transparency and visibility. We issue a certificate as a token of 
                                  appreciation to planters and also post the same on social networks if the user opts for the same. 
                                  In lieu of our services following points should be noted: 
                                </p>
            
                                <ol class = "orderlist text-success">	
                                    <li class="text-justify text-success">GIT runs the tree plantation and rural livelihood program in association with our NGO partners. 
                                    We follow a strict due diligence process to select sites for plantation and we do a detailed scrutiny 
                                    in order to select NGO partner to be responsible for carrying out the plantation in selected locations.</li>
                                    <li class="text-justify text-success">We leverage services from various environmental agencies and independent experts to select plant species.</li>
                                    <li class="text-justify text-success">GIT and its affiliates (including our NGO partners) adopt best practices to plant trees and make best efforts 
                                    to maintain trees post plantation. However, GIT shall not be responsible for any harm to planted trees which may occur due to reasons 
                                    beyond our control (fire, flood, earthquake, drought, diseases and land acquisition by government authorities). 
                                    We also enforce fencing and protection mechanism to ensure planted trees are intact and safe however GIT shall not be responsible for the harm occurring from illegal felling or grazing of trees</li>
                                    <li class="text-justify text-success">Sometimes it may be possible that we may tag already planted tree to your virtual tree. This is done only under the circumstances wherein we feel that actual plantation is not possible 
                                    due to unforeseen conditions. We maintain a separate lot to meet the aforementioned eventuality. 
                                    However, GIT never tags trees which have already been tagged to other planters</li>
                                    <li class="text-justify text-success"> As soon as a virtual tree is planted on GIT portal, we arrange for
                                     plantation of the real tree at the location chosen by the planter. However whenever weather conditions do
                                      not allow timely plantation there might be a delay in plantation (to a maximum extent of one year) and
                                       GIT will notify planters about the delay. Subject to weather conditions there might be change in location 
                                       of actual tree plantation, GIT however will notify about the actual location of plantation.</li>
                                    <li class="text-justify text-success">Wherever contributors/planters are interested to visit plantation sites 
                                    they are encouraged to do so on their own expenses.</li>
                                    <li class="text-justify text-success">GIT follows strict audit processes to track post plantation growth and survival of planted trees, it also plants extra number of trees (buffer trees) to minimize effect of mortality rate that might occur due to unavoidable circumstances or reasons mentioned earlier. We have implemented best technology system to track and map individual trees however
                                     there might be minor deviation due to unavailability of GPS signals at few places/under few weather conditions</li>
                                    <li class="text-justify text-success">Planters do not own trees or any products derived from the trees planted by them.</li>
                                </ol>
                                <p class="text-justify text-success">“We as a merchant shall be under no liability whatsoever in respect of any loss or damage arising directly or indirectly out 
                                of the decline of authorization for any Transaction, on Account of the Cardholder having exceeded the preset limit mutually 
                                agreed by us with our acquiring bank from time to time”. 	</p>
            
                                <p class="text-justify text-success"><strong>(B) User License</strong><br/>
                                    GIT is a unique initiative and the developed system and processes are first one of its kind in the world.
                                     Few of these components are pending for patent; therefore, 
                                    adherence to our user license policy is of utmost importance.</p>
            
                                <p class="text-justify text-success">1. Permission is granted to temporarily download one copy of the materials (information or software) on GIT’s website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</p>
                                    <ol type = "circle" class="text-justify text-success">
                                        <li> Modify or copy the materials</li>
                                        <li>Use the materials for any commercial purpose, or for any public display (other than non-commercial)</li>
                                        <li>Attempt to decompile or reverse engineer any software contained on GIT’s web site</li>
                                        <li>Remove any copyright or other proprietary notations from the materials</li>
                                        <li>Transfer the materials to another person or “mirror” the materials on any other server</li>
                                    </ol>
                                
                                <p class="text-justify text-success">
                                2. This license shall automatically terminate if you violate any of these restrictions and
                                     may be terminated by GIT at any time. Upon terminating your viewing of these materials 
                                     or upon the termination of this license, you must destroy any downloaded materials in 
                                     your possession whether in electronic or printed format.
                            <br/>
                       
                            <strong>  (C) Disclaimer</strong><br/>
                                The information contained in this website is for general information purposes only. 
                                The information is provided by ‘GIT’ and while we endeavor to keep the information up to date 
                                and correct, we make no representations or warranties of any kind, express or implied, about
                                 the completeness, accuracy, reliability, suitability or availability with respect to the
                                  website or the information, products, services, or related graphics contained on the website
                                   for any purpose. Any reliance you place on such information is therefore strictly at your own 
                                   risk.<br/>
                              
                              In no event will we be liable for any loss or damage including without limitation, indirect or 
                          consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits 
                          are arising out of, or in connection with, the use of this website.<br/>
                        
                        Through this website you are able to link to other websites which are not under the control of GIT.
                         We have no control over the nature, content and availability of those sites. The inclusion of any 
                         links does not necessarily imply a recommendation or endorse the views expressed within them.<br/>
                         Every effort is made to keep the website up and running smoothly. However, GIT takes no responsibility
                          for, and will not be liable for, the website being temporarily unavailable due to technical issues
                           beyond our control.<br/>
                    
                    <strong>D) Limitations</strong><br/>
                In no event shall GIT or its partners be liable for any damages (including, without limitation, 
                damages for loss of data or profit, or due to business interruption,) arising out of the use or 
                inability to use the materials on GIT’s Internet site, even if GIT or a GIT authorized representative 
                has been notified orally or in writing of the possibility of such damage. Because some jurisdictions 
                do not allow limitations on implied warranties, or limitations of liability for consequential or
                 incidental damages, these limitations may not apply to you.<br/>
                
                <strong>(E) Revisions and Errata</strong>
                <br/>
                The materials appearing on GIT’s website could include technical, typographical, or photographic errors.
                 GIT does not warrant that any of the materials on its website are accurate, complete, or current. GIT may make changes to the materials contained on its website at any time without notice. GIT does not, however, make any commitment to update the materials.<br/>
                
                <strong> (F) Links</strong><br/>
                    GIT has not reviewed all of the sites linked to its Internet website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by GIT of the site. Use of any such linked web site is at the user’s own risk.<br/>
              
                  <strong>  (G) Shipping & Delivery Policy (Services)</strong><br/>
                    Delivery of our services will be confirmed on your mail ID as specified during registration. As soon as a 
                    virtual tree is planted on GIT portal, we arrange for plantation of the real tree at the respective location chosen by the planter who is also notified about these processes through his/her mail ID. However, whenever weather conditions do not allow timely plantation, there might be a delay in plantation (to a maximum extent of one year) and GIT will notify planters about the delay. Subject to weather conditions there might be change in location of actual tree plantation, GIT however will notify about the actual location of plantation.<br/>
                    For any issues in utilizing our services, you may contact to chairman@gitrust.org<br/>
                
                <strong> (H) Refund and Cancellation Policy</strong><br/>
                
                    You acknowledge the fact that services provided by GIT are irreversible i.e. trees once planted can’t 
                    be uprooted and this action would be against our work ethics. Therefore, once the order is placed we do 
                    not entertain any refund or cancellations.
            </p>
                 
                           
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer text-center"><button class="btn btn-light text-center" type="button" data-dismiss="modal">Accept</button></div>
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