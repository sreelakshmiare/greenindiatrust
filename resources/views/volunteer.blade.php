@extends('layouts.index')
@section('center')

<section class="section-about">
    <div class="container">
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
                        <h5 class="text-center text-success"><strong>Volunteer Application Form</strong></h5>
                        <div class="shadow-sm form-row">
                            <div class="form-group col-md-6">
                                <input class="form-control" type="text" name="first_name" id="first_name" placeholder="Firstname" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Lastname" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" type="text" name="mobile" id="mobile" placeholder="Mobile Number" required="">
                            </div>
                            <div class="form-group col-md-4">
                            <select class="form-control" name="gender" id="gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <input class="form-control" type="text" name="age" id="age" placeholder="Age" required="">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" name="address" id="address" placeholder="Address" required=""></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <select class="form-control" name="education" id="education" required="">
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
                                    <input class="form-check-input" type="radio" id="relocating" name="relocating" value="Y" checked>
                                    <label class="form-check-label" for="relocating">Yes&nbsp;</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="relocating" name="relocating" value="N">
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
                                    <input class="form-check-input" type="radio" id="liketodonate" name="liketodonate">
                                    <label class="form-check-label" for="liketodonate">
                                        <a href="donatepage.html">Yes</a>&nbsp;
                                    </label>                                    
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="liketodonate" name="liketodonate" checked>
                                    <label class="form-check-label" for="liketodonate">
                                        <a href="#">No</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Enter Donation Amount</label>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" type="text" name="donation_amount" id="donation_amount" placeholder="Donation Amount">
                            </div>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="acceptterms" name="acceptterms" value="Y">
                                    <label class="form-check-label" for="acceptterms">Accept the Terms and Conditions<br></label>
                                </div>
                            </div>
                            <div class="text-right form-group col-md-6">
                                <button class="btn btn-success btn-sm text-center" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>
    $( "#volunteerform" ).submit(function( event ) {
        alert( "Thank You for Your Interest in Volunteering for Green India. We will Contact you Soon. Mean while Please check our Active Fundraising Campaigns." );
        //event.preventDefault();
    });
</script>
@endsection