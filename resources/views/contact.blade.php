@extends('layouts.index')
@section('center')

<section class="section-about">
    <div>
        <div class="container-fluid">
            <h5 class="text-success"><strong>Contact Information</strong></h5>
            <hr>
            <form class="border rounded-0 border-light shadow-sm" id="contactForm" data-bss-recipient="a341fb96315996c7457de8d5d2b72d5c" data-bss-subject="Interested in Volunteering in Green India Trust">
                <input class="form-control" type="hidden" name="Introduction" value="Interested in Voluteering in Green India Trust">
                <input class="form-control" type="hidden" name="subject" value="Green India Trust Contact Application Form">
                <input class="form-control" type="hidden" name="to"
                    value="Dr. Murali Krishna, Chairman, Green India Trust">
                <div class="form-row">
                    <div class="col-md-6">
                        <div id="successfail"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 col-md-6" id="message">
                        <h3 class="text-success h4">
                            <i class="fa fa-envelope"></i>
                            Contact Us<small>
                                <small class="required-input">&nbsp;(*required)</small>
                            </small>
                        </h3>
                        <div class="form-group"><label class="text-success" for="from-name">Name</label>
                            <span class="required-input">*</span>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">
                                    <i class="fa fa-user-o"></i></span></div>
                                    <input class="form-control" type="text" id="from-name" name="name" required=""
                                    placeholder="Full Name">
                                </div>
                        </div>
                        <div class="form-group"><label class="text-success" for="from-email">Email</label>
                            <span class="required-input">*</span>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">
                                    <i class="fa fa-envelope-o"></i></span></div>
                                    <input class="form-control" type="text" id="from-email" name="email" required=""
                                    placeholder="Email Address">
                                </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="text-success" for="from-phone">Phone</label>
                                    <span class="required-input">*</span>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">
                                            <i class="fa fa-phone"></i></span></div><input class="form-control"
                                            type="text" id="from-phone" name="phone" required=""
                                            placeholder="Primary Phone">
                                        </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="text-success" for="from-calltime">Best Time to Call</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">
                                            <i class="fa fa-clock-o"></i></span></div>
                                            <select class="form-control" id="from-calltime" name="call time">
                                                <optgroup label="Best Time to Call">
                                                    <option value="Morning" selected="">Morning</option>
                                                    <option value="Afternoon">Afternoon</option>
                                                    <option value="Evening">Evening</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label class="text-success" for="from-comments">Comments</label>
                            <textarea class="form-control" id="from-comments" name="comments"
                            placeholder="Enter Comments" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <button class="btn btn-primary btn-block bg-success" type="reset">
                                        <i class="fa fa-undo"></i> Reset</button>
                                    </div>
                                <div class="col">
                                    <button class="btn btn-primary btn-block bg-success" type="submit">Submit
                                        <i class="fa fa-chevron-circle-right"></i></button>
                                    </div>
                            </div>
                        </div>
                        <hr class="d-flex d-md-none">
                    </div>
                    <div class="col-12 col-md-6">
                        <h2 class="text-success h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="static-map">
                                    <iframe allowfullscreen frameborder="0"
                                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDKPILgi-9deG3OGgxKeML1dFxFxRwbRAw&amp;q=Green+India+Trust%2C+Nellore&amp;zoom=15" width="100%" height="400"></iframe></div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <h2 class="text-success h4"><i class="fa fa-user"></i> Our Info</h2>
                                <div><span class="text-success"><strong>Dr. Muralikrishna</strong><br></span></div>
                                <div><span class="text-success">chairman@gitrust.org</span></div>
                                <div><span class="text-success">gnitrust@gmail.com</span></div>
                                <hr class="d-sm-none d-md-block d-lg-none">
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <h2 class="text-success h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                                <div><span class="text-success"><strong>Green India Trust</strong></span></div>
                                <div><span class="text-success">16-2-51,Near S2 Cine Complex,</span></div>
                                <div><span class="text-success">Pogathota, Nellore.</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

            </div>
        </div>
    </div>
</section>

    @endsection
