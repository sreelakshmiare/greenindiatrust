@extends('layouts.index')
@section('center')

<section class="section-about">
    <div class="container">
        <div class="row">
            <div class="col col-md-12">
                <h4 class="text-success">Be With Us For</h4>
                <div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item tabitem"><a class="nav-link active text-white bg-success border rounded border-white" role="tab" data-toggle="tab" href="#tab-1">Health Care</a></li>
                        <li class="nav-item tabitem"><a class="nav-link text-white bg-success border rounded border-white para-tab" role="tab" data-toggle="tab" href="#tab-2">Environment</a></li>
                        <li class="nav-item tabitem"><a class="nav-link text-white bg-success border rounded border-white" role="tab" data-toggle="tab" href="#tab-3">Livlihood</a></li>
                        <li class="nav-item tabitem"><a class="nav-link text-white bg-success border rounded border-white para-tab" role="tab" data-toggle="tab" href="#tab-4">Education</a></li>
                        <li class="nav-item tabitem"><a class="nav-link text-white bg-success border rounded border-white para-tab" role="tab" data-toggle="tab" href="#tab-5">Equipment</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="tab-1">
                            <p class="text-success para-tab">&nbsp;<strong>Health Care Donations</strong></p>
                            <div class="bg-light border rounded-0 shadow div-livedonate">
                                <div class="row">
                                    <div class="col-lg-3"><a href="#"><img class="img-thumbnail img-fluid" src="{{ asset('img/desk.jpg')}}"></a></div>
                                    <div class="col-lg-3">
                                        <p class="text-success description">Help 100 Patients with medictions to ensure effective recovery.</p>
                                        <h6 class="text-success">Tax Benefit 50%</h6><a href="#">More</a></div>
                                    <div class="col-lg-4"><label class="col-form-label text-left text-success">Enter Amount :&nbsp;<select><optgroup label="This is a group"><option value="12" selected="">Rs 20,000</option><option value="13">Enter Amount</option><option value="14">This is item 3</option></optgroup></select></label></div>
                                    <div
                                        class="col-lg-2 text-left"><a class="btn btn-success btn-sm" role="button" href="personaldetails.html">Contribute</a></div>
                            </div>
                        </div>
                        <div class="bg-light border rounded-0 shadow div-livedonate">
                            <div class="row">
                                <div class="col-lg-3"><a href="#"><img class="img-thumbnail img-fluid" src="{{ asset('img/desk.jpg')}}"></a></div>
                                <div class="col-lg-3">
                                    <p class="text-success description">To conduct medical camp in&nbsp; rural areas(using mobile clinic)<br></p>
                                    <h6 class="text-success">Tax Benefit 50%</h6><a href="#">More</a></div>
                                <div class="col-lg-4"><label class="col-form-label text-left text-success">Enter Amount :&nbsp;<select><optgroup label="This is a group"><option value="12" selected="">Rs 25,000</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></label></div>
                                <div
                                    class="col-lg-2 text-left"><a class="btn btn-success btn-sm" role="button" href="personaldetails.html">Contribute</a></div>
                        </div>
                    </div>
                    <div class="bg-light border rounded-0 shadow div-livedonate">
                        <div class="row">
                            <div class="col-lg-3"><a href="#"><img class="img-thumbnail img-fluid" src="{{ asset('img/desk.jpg')}}"></a></div>
                            <div class="col-lg-3">
                                <p class="text-success description">Help poor women get access to gynecology services, provide good quality treatment.</p>
                                <h6 class="text-success">Tax Benefit 50%</h6><a href="#">More</a></div>
                            <div class="col-lg-4"><label class="col-form-label text-left text-success">Enter Amount :&nbsp;<select><optgroup label="This is a group"><option value="12" selected="">Rs 25,000</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></label></div>
                            <div
                                class="col-lg-2 text-left"><a class="btn btn-success btn-sm" role="button" href="personaldetails.html">Contribute</a></div>
                    </div>
                </div>
                <div class="bg-light border rounded-0 shadow div-livedonate">
                    <div class="row">
                        <div class="col-lg-3"><a href="#"><img class="img-thumbnail img-fluid" src="{{ asset('img/desk.jpg')}}"></a></div>
                        <div class="col-lg-3">
                            <p class="text-success">Support the Post-Natal care of newborn children(upto 1yr)</p>
                            <h6 class="text-success">Tax Benefit 50%</h6><a href="#">More</a></div>
                        <div class="col-lg-4"><label class="col-form-label text-left text-success">Enter Amount :&nbsp;<select><optgroup label="This is a group"><option value="12" selected="">Rs 13,000</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></label></div>
                        <div
                            class="col-lg-2 text-left"><a class="btn btn-success btn-sm" role="button" href="personaldetails.html">Contribute</a></div>
                </div>
            </div>
        </div>
        <div class="tab-pane" role="tabpanel" id="tab-2">
            <p class="text-success para-tab">&nbsp;<strong>Environment Donations</strong></p>


<div class="card-deck">

<div class="card shadow">
   <img class="card-img-top img-gal w-100" src="{{ asset('img/home-about.jpg')}}" alt="Card image cap">
    <div class="card-body">
        <p class="card-text text-success">Support Billion Tree Plantation to protect the Environment.</p>
            
             <label class = "text-muted">Contribution  </label> <input type="checkbox"> 175 <br/>
            <label class="text-success">Quantity <input type="text" placeholder = "1" ></label>
    </div>

 <div class ="card-footer text-center bg-success">
    <small class="text-white"><b>Plant a Tree</b></small>
</div>
</div>

<div class="card shadow">
<img class="card-img-top img-gal w-100" src="{{ asset('img/New%20Folder/29.jpeg')}}" alt="Card image cap">
    <div class="card-body">
         <p class="card-text text-success">Give a gift, that keeps giving for the generations to come.</p>
            
              <label class = "text-green">Contribution  </label> <input type="checkbox"> 175 <br/>

            <label class="text-success">Quantity <input type="text" placeholder = "1" ></label>
    </div>

<div class="card-footer text-center bg-success">
  <small class="text-white"><b>Gift a Tree</b></small>
</div>
</div>

<div class="card shadow">
  <img class="card-img-top img-gal w-100" src="{{ asset('img/index.jpg')}}" alt="Card image cap">
 <div class="card-body">
    <p class="card-text text-success">Save Wate harvestingwell with naturally by increasing ground water</p>
        
         <label class = "text-muted">Contribution  </label> <input type="checkbox"> 20,000 <br/>
        <label class="text-success">Quantity <input type="text" placeholder = "1" > </label>
</div>

<div class="card-footer text-center bg-success">
  <small class="text-white"><b>Save Water</b></small>
</div>
</div>
</div></div>
        <div class="tab-pane" role="tabpanel" id="tab-3">
            <p class="text-success para-tab"><strong>Livlihood</strong>&nbsp;<strong>Donations</strong></p>
            <div class="bg-light border rounded-0 shadow div-livedonate">
                <div class="row">
                    <div class="col-lg-3"><img class="img-thumbnail img-fluid img-health" src="{{ asset('img/savemother.jpg')}}"></div>
                    <div class="col-lg-9">
                        <h6 class="text-success"><strong>Keep Mothers Alive</strong></h6>
                        <p class="text-success">No women should die giving life.But more than 150 die ecery day unneccesarily from complicatins of pregnancy or childbirth.</p>
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="keepmother"><label class="form-check-label" for="formCheck-1">INR 2,000/- more than can provide abtenatel care for women.</label></div>
                        <div class="form-check disabled"><input class="form-check-input" type="radio" id="formCheck-1" name="keepmother"><label class="form-check-label" for="formCheck-1">INR 20,000/- more than can provide supplies,medications and equipment so a rural health clinic can handle many obstetric emergencies.</label></div>
                        <div
                            class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="keepmother"><label class="form-check-label" for="formCheck-1"><input class="form-control-sm form-control" type="text" placeholder="Any other amount."></label></div>
                    <a
                        class="btn btn-success btn-sm text-white border rounded button-donate" role="button" href="personaldetails.html">Donate</a><span><a href="#">Learn More</a></span></div>
            </div>
        </div>
        <div class="bg-light border rounded-0 shadow div-livedonate">
            <div class="row">
                <div class="col-lg-3"><img class="img-thumbnail img-fluid img-gal" src="{{ asset('img/shggroup.jpg')}}"></div>
                <div class="col-lg-9">
                    <h6 class="text-success"><strong>Organic Farming Training</strong></h6>
                    <p class="text-success">Train rural women in better agricultural practices to increase their yield and income and earn more respect within the household.</p>
                    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2" name="saveit"><label class="form-check-label" for="formCheck-2"><a href="#">INR 3000/-</a>&nbsp;will train 3 women to enchance their household income.<br></label></div>
                    <div
                        class="form-check"><input class="form-check-input" type="radio" id="formCheck-2" name="saveit"><label class="form-check-label" for="formCheck-2"><a href="#">INR 10000/-</a>&nbsp;will train 6 women to enchance their household income.<br></label></div>
                <div
                    class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="saveit"><label class="form-check-label" for="formCheck-1"><input class="form-control-sm form-control" type="text" placeholder="Any other amount."></label></div>
            <a
                class="btn btn-success btn-sm text-white button-donate" role="button" href="personaldetails.html">Donate</a><span><a href="#">Learn More</a></span></div>
    </div>
    </div>
    <div class="bg-light border rounded-0 shadow div-livedonate">
        <div class="row">
            <div class="col-lg-3"><img class="img-thumbnail img-fluid img-gal" src="{{ asset('img/home-womenpower.jpg')}}"></div>
            <div class="col-lg-9">
                <h6 class="text-success"><strong>Tailoring Training&nbsp;</strong></h6>
                <p class="text-success">Your help towards empowering poor women will be life changing opportunity for a better future.</p>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="saveit"><label class="form-check-label" for="formCheck-3"><a href="#">INR 10,000/-</a>&nbsp;will provide 1 poor women to training and purchasing new sewing machine.<br></label></div>
                <div
                    class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="saveit"><label class="form-check-label" for="formCheck-3"><a href="#">INR 30,000/-</a>&nbsp;will provide 10 poor women to training and purchasing new sewing machine.<br></label></div>
            <div
                class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="saveit"><label class="form-check-label" for="formCheck-1"><input class="form-control-sm form-control" type="text" placeholder="Any other amount."></label></div><a class="btn btn-success btn-sm text-white button-donate"
            role="button" href="personaldetails.html">Donate</a><span><a href="#">Learn More</a></span></div>
    </div>
    </div>
    </div>
    <div class="tab-pane" role="tabpanel" id="tab-4">
        <p class="text-success para-tab">&nbsp;<strong>Education Donations</strong></p>
        <div class="bg-light border rounded-0 shadow div-livedonate">
            <div class="row">
                <div class="col-lg-3"><img class="img-thumbnail img-fluid img-gal" src="{{ asset('img/education2.jpg')}}"></div>
                <div class="col-lg-9">
                    <h6 class="text-success"><strong>Computer Education Training</strong></h6>
                    <p class="text-success">We have a dream of making every student proficient in using computers and survive in todays digital world.</p>
                    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-4" name="saveit"><label class="form-check-label" for="formCheck-4"><a href="#"><span style="text-decoration: underline;">INR 15,000/-</span></a><span style="text-decoration: underline;">&nbsp;w</span>ill computer train 15 school children for rural areas.<br></label></div>
                    <div
                        class="form-check"><input class="form-check-input" type="radio" id="formCheck-4" name="saveit"><label class="form-check-label" for="formCheck-4"><a href="#"><span style="text-decoration: underline;">INR 30,000/-</span></a><span style="text-decoration: underline;">&nbsp;w</span>ill computer train 30 school children for rural areas.<br></label></div>
                <div
                    class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="saveit"><label class="form-check-label" for="formCheck-1"><input class="form-control-sm form-control" type="text" placeholder="Any other amount."></label></div>
            <a
                class="btn btn-success btn-sm text-white button-donate" role="button" href="personaldetails.html">Donate</a><span><a href="#">Learn More</a></span></div>
    </div>
    </div>
    <div class="bg-light border rounded-0 shadow div-livedonate">
        <div class="row">
            <div class="col-lg-3"><img class="img-thumbnail img-fluid img-gal" src="{{ asset('img/education.jpg')}}"></div>
            <div class="col-lg-9">
                <h6 class="text-success"><strong>Support School Education</strong></h6>
                <p class="text-success">We give school kits to enable access to basic education material and improve learning infrastructure in rural areas.</p>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-5" name="saveit"><label class="form-check-label" for="formCheck-5"><a href="#">INR 5,000/-</a>&nbsp;will provide 5 school kits for rural children.<br></label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-5" name="saveit"><label class="form-check-label" for="formCheck-5"><a href="#">INR 10,000/-</a>&nbsp;will provide 10 school kits for rural children.<br></label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="saveit"><label class="form-check-label" for="formCheck-1"><input class="form-control-sm form-control" type="text" placeholder="Any other amount."></label></div>
                <a
                    class="btn btn-success btn-sm text-white button-donate" role="button" href="personaldetails.html">Donate</a><span><a href="#">Learn More</a></span></div>
        </div>
    </div>
    </div>
    <div class="tab-pane" role="tabpanel" id="tab-5">
        <p class="text-success para-tab">&nbsp;<strong>Equipment&nbsp;Donations</strong></p>
        <div class="bg-light border rounded-0 shadow div-livedonate">
            <div class="row">
                <div class="col-lg-3"><img class="img-thumbnail img-fluid shadow img-donate" src="{{ asset('img/DIGITAL%20X-RAY.jpg')}}"></div>
                <div class="col-lg-9">
                    <h6 class="text-success"><strong>DIGITAL X-RAY ADONIS</strong><br></h6>
                    <p class="text-success">Adonis High Frequency Auto Programmable X-Ray Systems at an affordable Prices Precision, Power, and Economy makes Adonis High Frequency X-Ray system.</p>
                    <p class="text-success">Adonis High Frequency X-Ray Machines are powered to meet all Radiological needs at an affordable price. Improve your skin dosage limits and exposure accuracy with our top of the line HF series radiography systems.</p>
                    <p class="text-success"><strong>WHY DO WE NEED IT?</strong></p>
                    <ul>
                        <li class="text-success">It is our most trusted, reliable and flexible x-ray machine.</li>
                        <li class="text-success">Experience high quality medical imaging with our range of high frequency C-ARMS.<br></li>
                    </ul>
                    <p class="text-success"><strong>Cost of the equipment : Rs 5,00,000/-</strong></p><a class="btn btn-success btn-sm text-white border rounded button-donate" role="button" href="personaldetails.html">Sponsor Now</a></div>
            </div>
        </div>
        <div class="bg-light border rounded-0 shadow div-livedonate">
            <div class="row">
                <div class="col-lg-3"><img class="img-thumbnail img-fluid shadow img-donate" src="{{ asset('img/ULTRASOUND%20SCAN.jpg')}}"></div>
                <div class="col-lg-9">
                    <h6 class="text-success"><strong>ULTRASOUND SCAN</strong><br></h6>
                    <p class="text-success">One of major equipment for usage of pregnancy women care. These scans can provide an expectant mother with the first view of her unborn child. For the pregnancy woman can be scan very month for health condition of her unborn child.</p>
                    <p
                        class="text-success">Green India Trust conducting free check-up for pregnancy women or other patients in rural areas or slum areas.<br></p>
                        <p class="text-success"><strong>WHY DO WE NEED IT?</strong></p>
                        <ul>
                            <li class="text-success">Free health check-up pregnancy women or other patients.</li>
                            <li class="text-success">Exclusively designed to fit into mobile clinic vehicles.<br></li>
                            <li class="text-success">Image will be storage in internal or to printed without using external device.<br></li>
                            <li class="text-success">Image quality or accuracy.<br></li>
                        </ul>
                        <p class="text-success"><strong>Cost of the equipment : Rs 15,00,000/-</strong></p><a class="btn btn-success btn-sm text-white border rounded button-donate" role="button" href="personaldetails.html">Sponsor Now</a></div>
            </div>
        </div>
        <div class="bg-light border rounded-0 shadow div-livedonate">
            <div class="row">
                <div class="col-lg-3"><img class="img-thumbnail img-fluid shadow img-donate1" src="{{ asset('img/vehicle%20image.jpg')}}"></div>
                <div class="col-lg-9">
                    <h6 class="text-success"><strong>VEHICLES USED IN THE MOBILE CLINICS</strong><br></h6>
                    <p class="text-success">Mobile clinics are our traditional week-long service, Mobile medical clinic that travels to poor communities to provide free medical service.</p>
                    <p class="text-success">Our clinics offers general medical and gynecology services as well as preventative test such as<br>BP, Blood Test, X-Ray and pregnancy test etcs.<br></p>
                    <p class="text-success"><strong>WHY DO WE NEED IT?</strong></p>
                    <ul>
                        <li class="text-success">To free medical care is provided to the patient.</li>
                        <li class="text-success">Transports Emergency patients to treatment facilities, such as hospitals.<br></li>
                        <li class="text-success">To provide the all test and medicines with free cost.<br></li>
                        <li class="text-success">Different vehicles are used in -GREEN INDIA TRUST for mobile clinic.<br></li>
                    </ul>
                    <p class="text-success"><strong>Cost of the equipment : Rs 19,90,886/-</strong></p>
                    <p class="text-success"><strong>Cost Breakup :&nbsp;</strong><a class="text-primary" href="vehicaldetails.html">Vehical Details</a></p><a class="btn btn-success btn-sm text-white border rounded button-donate" role="button" href="personaldetails.html">Sponsor Now</a></div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</section>

@endsection