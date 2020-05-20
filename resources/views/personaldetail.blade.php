@extends('layouts.index')
@section('center')

<section class="section-about">
    <div class="container">
        <h5 class="text--justify text-success">Personal Information</h5>
        <div class="class-form">
            
            <form class="bg-light shadow form">
                
                <div class="form-row">
                    <div class="col-lg-5 offset-lg-1 form-group"><input type="text" class="form-control" placeholder="Firstname" />
                    </div>
                    <div class="col-lg-5 form-group"><input type="text" class="form-control" placeholder="Lastname" />
                    </div>
                </div>
               
                <div class="form-row">
                    <div class="col-lg-5 offset-lg-1 form-group"><input type="email" class="form-control" placeholder="Email" />
                    </div>
                    <div class="col-lg-5 form-group"><input type="password" class="form-control" placeholder="Password" />
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="col-lg-10 offset-lg-1 form-group">
                        <textarea class="form-control" placeholder="Address" rows="5">
                        </textarea>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="col-lg-5 offset-lg-1 form-group">
                            <input type="text" class="form-control" placeholder="City" />
                    </div>
                    <div class="col-lg-3 form-group">
                            <select class="form-control">
                                <option value="12" selected>Choose State</option>
                                <option value="13">Andhra Pradesh</option><option value="14">Arunachal Pradesh</option>
                                <option value>Assam</option><option value>Bihar</option><option value>Chandigarh</option>
                                <option value>Chhattisgarh</option><option value>Delhi</option><option value>Goa</option>
                                <option value>Gujarat</option><option value>Haryana</option><option value>Himachal Pradesh</option>
                                <option value>Jharkhand</option><option value>Karnataka</option><option value>Kerala</option>
                                <option value>Madhya Pradesh</option><option value>Maharashtra</option>
                                <option value>Manipur</option><option value>Meghalaya</option>
                                <option value>Mizoram</option><option value>Nagaland</option>
                                <option value>Odisha</option><option value>Punjab</option>
                                <option value>Rajasthan</option><option value>Sikkim</option>
                                <option value>Tamil Nadu</option><option value>Telangana</option>
                                <option value>Tripura</option><option value>Uttar Pradesh</option>
                                <option value>Uttarakhand</option><option value>West Bengal</option>
                            </select>
                    </div>
                    <div
                        class="col-lg-2 form-group"><input type="text" class="form-control" placeholder="Zip" />
                    </div>
                </div>
       
                <div class="form-row">
                    <div class="col-lg-5 offset-lg-1 form-group">
                        <input type="text" class="form-control" placeholder="Aadhar No." />
                    </div>
                    <div class="col-lg-3 form-group">
                        <input type="text" class="form-control" placeholder="PAN" />
                    </div>
                </div>
       
                <div class="form-row">
                    <div class="col-lg-2 offset-lg-1 text-left form-group">
                            <a class="btn btn-success" role="button" href="razorpay.html">Sign Up</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection