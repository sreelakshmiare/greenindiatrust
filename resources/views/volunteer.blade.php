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
                    <form>
                        <h5 class="text-center text-success"><strong>Volunteer Application Form</strong></h5>
                        <div class="shadow-sm form-row">
                            <div class="form-group col-md-6"><input class="form-control" type="text" placeholder="Firstname" required=""></div>
                            <div class="form-group col-md-6"><input class="form-control" type="text" placeholder="Lastname" required=""></div>
                            <div class="form-group col-md-6"><input class="form-control" type="email" placeholder="Email"></div>
                            <div class="form-group col-md-6"><input class="form-control" type="password" placeholder="Password"></div>
                            <div class="form-group col-md-6"><input class="form-control" type="text" placeholder="Mobile Number" required=""></div>
                            <div class="form-group col-md-4"><input class="form-control" type="text" placeholder="Gender" required=""></div>
                            <div class="form-group col-md-2"><input class="form-control" type="text" placeholder="Age" required=""></div>
                            <div class="form-group col-md-12"><input class="form-control" type="text" placeholder="Address" required=""></div>
                            <div class="form-group col-md-12"><select class="form-control" required=""><optgroup label="This is a group"><option value="12" selected="">Education</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
                            <div
                                class="form-group col-md-12"><select class="form-control" required=""><optgroup label="This is a group"><option value="12" selected="">Expected Period of Volunteership</option><option value="13">Weekdays</option><option value="14">Weekends</option></optgroup></select></div>
                        <div
                            class="form-group col-md-12"><select class="form-control" required=""><optgroup label="This is a group"><option value="12" selected="">Areas of Interest</option><option value="13">Administration Work</option><option value="14">Events Organizing</option><option value="14">Fundraising for GIT</option><option value="14">Teaching at Education Institution</option><option value="14">Creating Awareness for rural areas</option><option value="14">  Social Media Relations/Public Relation</option><option value="14">8.  health care expect/ environmentalist</option></optgroup></select></div>
                <div
                    class="form-group col-md-12"><label>Are You Relocating For conducting camps and events?</label>
                    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Yes&nbsp;</label></div>
                    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1"><label class="form-check-label" for="formCheck-1">No</label></div>
            </div>
            <div class="col-md-12"><label>Emergency Contact Details</label></div>
            <div class="form-group col-md-6"><input class="form-control" type="text" placeholder="Name" required=""></div>
            <div class="form-group col-md-6"><input class="form-control" type="text" placeholder="Mobile Number" required=""></div>
            <div><label>Would You like to Donate?</label>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1"><label class="form-check-label" for="formCheck-1"><a href="donatepage.html">Yes</a>&nbsp;</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1"><label class="form-check-label" for="formCheck-1"><a href="#">No</a></label></div>
            </div>
            <div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Accept the Terms and Conditions<br></label></div>
            </div>
            <div class="text-right form-group col-md-6"><a class="btn btn-success btn-sm text-center" role="button" href="donatepage.html"><strong>Submit</strong></a></div>
        </div>
        </form>
    </div>
    </div>
    </div>
    </div>
</section>

@endsection