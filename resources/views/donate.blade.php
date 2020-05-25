@extends('layouts.index')
@section('center')

<section class="section-about">
    <div class="container">
        <div class="row">
            <div class="col col-md-12">
                <h4 class="text-success">Be With Us For</h4>
                <div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item tabitem">
                            <a class="nav-link active text-white bg-success border rounded border-white" role="tab" data-toggle="tab" href="#tab-1">Health Care</a>
                        </li>
                        <li class="nav-item tabitem">
                            <a class="nav-link text-white bg-success border rounded border-white para-tab" role="tab" data-toggle="tab" href="#tab-2">Environment</a>
                        </li>
                        <li class="nav-item tabitem">
                            <a class="nav-link text-white bg-success border rounded border-white" role="tab" data-toggle="tab" href="#tab-3">Livlihood</a>
                        </li>
                        <li class="nav-item tabitem">
                            <a class="nav-link text-white bg-success border rounded border-white para-tab" role="tab" data-toggle="tab" href="#tab-4">Education</a>
                        </li>
                        <li class="nav-item tabitem">
                            <a class="nav-link text-white bg-success border rounded border-white para-tab" role="tab" data-toggle="tab" href="#tab-5">Equipment</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="tab-1">
                            <p class="text-success para-tab">&nbsp;
                                <strong>Health Care Donations</strong>
                            </p>
                            @php
                                $donations;
                            @endphp
                            @foreach ($categories as $category)
                                @if($category->name == "Healthcare Donations")                                    
                                        @foreach ($category->donations as $donation)
                                        <div class="bg-light border rounded-0 shadow div-livedonate">
                                            <form id="{{ $donation->donation_name }}" name="{{ $donation->donation_name }}" action="{{ route('personalDetail')}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <a href="#">
                                                            <img class="img-thumbnail img-fluid" src="{{ asset('img/'. $donation->donation_image)}}">
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p class="text-success description">{{ $donation->donation_description}}</p>
                                                        <h6 class="text-success">Tax Benefit 50%</h6>
                                                        <a href="#">More</a>
                                                    </div>                                    
                                                    <div class="col-lg-4">                                        
                                                        <label class="col-form-label text-left text-success">Amount : Rs. <strong>{{ $donation->donation_amount }}</strong>
                                                            <input type="hidden" value="{{ $donation->donation_amount }}" name="donation_amount">
                                                            <input type="hidden" value="{{ $donation->donation_name }}" name="donation_name">
                                                            <!-- <select>
                                                                <optgroup label="This is a group">
                                                                    <option value="12" selected="">Rs 20,000</option>
                                                                    <option value="13">Enter Amount</option>
                                                                    <option value="14">This is item 3</option>
                                                                </optgroup>
                                                            </select> -->
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-2 text-left">
                                                        <input type="submit" role="button" class="btn btn-success bg-success" value="Contribute">
                                                    </div>                                        
                                                </div>
                                            </form>
                                        </div>
                                    @endforeach  
                                    @break;
                                @endif
                            @endforeach
                                                      
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-2">
                            <p class="text-success para-tab">&nbsp;<strong>Environment Donations</strong></p>
                            <div class="card-deck">                                
                                @foreach ($categories as $category)
                                    @if($category->name == "Environment Donations")                                    
                                        @foreach ($category->donations as $envdonation)                                    
                                                <div class="card shadow">
                                                    <form id="{{ $envdonation->donation_name }}" name="{{ $envdonation->donation_name }}" action="{{ route('personalDetail')}}" method="post" enctype="multipart/form-data">
                                                        {{csrf_field()}}
                                                        <input type="hidden" value="{{ $envdonation->donation_amount }}" name="donation_amount" id="donation_amount">
                                                        <input type="hidden" value="{{ $donation->donation_name }}" name="donation_name">
                                                        <img class="card-img-top img-gal w-100" src="{{ asset('img/'.$envdonation->donation_image)}}" alt="Card image cap">
                                                        <div class="card-body">
                                                            <p class="card-text text-success">{{ $envdonation->donation_description}}</p>                            
                                                            <label class = "text-muted">Contribution</label> 
                                                            Rs. <strong><span id="damt">{{ $envdonation->donation_amount }}</span></strong> <br/>
                                                            <label class="text-success">
                                                                Quantity <input class="form-control form-control-lg" type="number" id="qty" name="qty" min="1" value="1" placeholder="1" >
                                                            </label>
                                                        </div>
                                                        <div class ="card-footer text-center bg-white">
                                                            <input id="envsubmit" type="submit" role="button" class="btn btn-success bg-success" value="Contribute">
                                                        </div>
                                                    </form>
                                                </div>
                                            
                                        @endforeach
                                        @break;
                                    @endif
                                @endforeach
                                                                
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-3">
                            <p class="text-success para-tab"><strong>Livlihood</strong>&nbsp;<strong>Donations</strong></p>
                                <div class="bg-light border rounded-0 shadow div-livedonate">
                                    <form id="livlihoodkeepmotherform" name="livlihoodkeepmotherform" action="{{ route('personalDetail')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}                                        
                                        
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <img class="img-thumbnail img-fluid img-health" src="{{ asset('img/savemother.jpg')}}">
                                            </div>
                                            <div class="col-lg-9">
                                                <h6 class="text-success">
                                                    <strong>Keep Mothers Alive</strong>
                                                </h6>
                                                <p class="text-success">No women should die giving life.But more than 150 die ecery day unneccesarily from complicatins of pregnancy or childbirth.</p>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="livamountkeepmother" name="livamountkeepmother" value="2000">
                                                    <label class="form-check-label" for="formCheck-1">INR 2,000/- more than can provide abtenatel care for women.</label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio" id="livamountkeepmother" name="livamountkeepmother" value="20000">
                                                    <label class="form-check-label" for="formCheck-1">INR 20,000/- more than can provide supplies,medications and equipment so a rural health clinic can handle many obstetric emergencies.</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="livamountkeepmother" name="livamountkeepmother" value="">
                                                    <label class="form-check-label" for="formCheck-1">
                                                        <input class="form-control-sm form-control" type="text" name="donation_amount" id="donation_amount" placeholder="Any other amount.">
                                                        <input type="hidden" value="Keep Mothers Alive" name="donation_name">
                                                    </label>
                                                </div>
                                                <input id="livlisubmit" type="submit" role="button" class="btn btn-success bg-success" value="Donate">
                                                <span>
                                                    <a href="#">Learn More</a>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                            
                            <div class="bg-light border rounded-0 shadow div-livedonate">
                                <form id="livlihoodorganicform" name="livlihoodorganicform" action="{{ route('personalDetail')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <img class="img-thumbnail img-fluid img-gal" src="{{ asset('img/shggroup.jpg')}}">
                                        </div>
                                        <div class="col-lg-9">
                                            <h6 class="text-success"><strong>Organic Farming Training</strong></h6>
                                            <p class="text-success">Train rural women in better agricultural practices to increase their yield and income and earn more respect within the household.</p>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="livlihoodorganic" name="livlihoodorganic"  value="3000">
                                                <label class="form-check-label" for="livlihoodorganic">
                                                    <a href="#">INR 3000/-</a>&nbsp;will train 3 women to enchance their household income.<br>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="livlihoodorganic" name="livlihoodorganic" value="10000">
                                                <label class="form-check-label" for="livlihoodorganic">
                                                    <a href="#">INR 10000/-</a>&nbsp;will train 6 women to enchance their household income.<br>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="livlihoodorganic" name="livlihoodorganic" value="">
                                                <label class="form-check-label" for="livlihoodorganic">
                                                    <input class="form-control-sm form-control" type="text" name="donation_amount" id="donation_amount" placeholder="Any other amount.">
                                                    <input type="hidden" value="Organic Farming Training" name="donation_name">
                                                </label>
                                            </div>
                                            <input id="livliorganicsubmit" type="submit" role="button" class="btn btn-success bg-success" value="Donate">
                                            <span>
                                                <a href="#">Learn More</a>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="bg-light border rounded-0 shadow div-livedonate">
                                <form id="livlihoodtailerform" name="livlihoodtailerform" action="{{ route('personalDetail')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img class="img-thumbnail img-fluid img-gal" src="{{ asset('img/home-womenpower.jpg')}}">
                                    </div>
                                    <div class="col-lg-9">
                                        <h6 class="text-success"><strong>Tailoring Training&nbsp;</strong></h6>
                                        <p class="text-success">Your help towards empowering poor women will be life changing opportunity for a better future.</p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="livlihoodtailer" name="livlihoodtailer" value="10000">
                                            <label class="form-check-label" for="livlihoodtailer">
                                                <a href="#">INR 10,000/-</a>&nbsp;will provide 1 poor women to training and purchasing new sewing machine.<br>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="livlihoodtailer" name="livlihoodtailer" value="30000">
                                            <label class="form-check-label" for="livlihoodtailer">
                                                <a href="#">INR 30,000/-</a>&nbsp;will provide 10 poor women to training and purchasing new sewing machine.<br>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="livlihoodtailer" name="livlihoodtailer" value="">
                                            <label class="form-check-label" for="livlihoodtailer">
                                                <input class="form-control-sm form-control" type="text" name="donation_amount" id="donation_amount" placeholder="Any other amount.">
                                                <input type="hidden" value="Tailoring Training" name="donation_name">
                                            </label>
                                        </div>
                                        <input id="livlitailersubmit" type="submit" role="button" class="btn btn-success bg-success" value="Donate">
                                        <span><a href="#">Learn More</a></span>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-4">
                            
                            <p class="text-success para-tab">&nbsp;<strong>Education Donations</strong></p>
                            <div class="bg-light border rounded-0 shadow div-livedonate">
                                <form id="educationscomputerform" name="educationscomputerform" action="{{ route('personalDetail')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <img class="img-thumbnail img-fluid img-gal" src="{{ asset('img/education2.jpg')}}">
                                        </div>
                                        <div class="col-lg-9">
                                            <h6 class="text-success"><strong>Computer Education Training</strong></h6>
                                            <p class="text-success">We have a dream of making every student proficient in using computers and survive in todays digital world.</p>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="educationscomputer" name="educationscomputer" value="15000">
                                                <label class="form-check-label" for="educationscomputer">
                                                    <span >INR 15,000/-</span>
                                                    
                                                    <span >&nbsp;will computer train 15 school children for rural areas.</span><br>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="educationscomputer" name="educationscomputer" value="30000">
                                                <label class="form-check-label" for="educationscomputer">
                                                    <span>INR 30,000/-</span>
                                                    <span>&nbsp;will computer train 30 school children for rural areas.</span><br>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="educationscomputer" name="educationscomputer" value="">
                                                <label class="form-check-label" for="educationscomputer">
                                                    <input class="form-control-sm form-control" type="text" name="donation_amount" id="donation_amount" placeholder="Any other amount.">
                                                    <input type="hidden" value="Computer Education Training" name="donation_name">
                                                </label>
                                            </div>
                                            <input id="educationscomputersubmit" type="submit" role="button" class="btn btn-success bg-success" value="Donate">
                                                <span><a href="#">Learn More</a></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="bg-light border rounded-0 shadow div-livedonate">
                                <form id="educationsschoolform" name="educationsschoolform" action="{{ route('personalDetail')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <img class="img-thumbnail img-fluid img-gal" src="{{ asset('img/education.jpg')}}">
                                        </div>
                                        <div class="col-lg-9">
                                                <h6 class="text-success"><strong>Support School Education</strong></h6>
                                                <p class="text-success">We give school kits to enable access to basic education material and improve learning infrastructure in rural areas.</p>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="educationsschool" name="educationsschool" value="5000">
                                                    <label class="form-check-label" for="educationsschool">
                                                        <a href="#">INR 5,000/-</a>&nbsp;will provide 5 school kits for rural children.<br>
                                                    </label></div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="educationsschool" name="educationsschool" value="10000">
                                                    <label class="form-check-label" for="educationsschool">
                                                        <a href="#">INR 10,000/-</a>&nbsp;will provide 10 school kits for rural children.<br>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="educationsschool" name="educationsschool" value="">
                                                    <label class="form-check-label" for="educationsschool">
                                                        <input class="form-control-sm form-control" type="text" name="donation_amount" id="donation_amount" placeholder="Any other amount.">
                                                        <input type="hidden" value="Support School Education" name="donation_name">
                                                    </label>
                                                </div>
                                                <input id="educationsschoolsubmit" type="submit" role="button" class="btn btn-success bg-success" value="Donate">
                                                <span><a href="#">Learn More</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="tab-5">
                                <p class="text-success para-tab">&nbsp;<strong>Equipment&nbsp;Donations</strong></p>
                                <div class="bg-light border rounded-0 shadow div-livedonate">
                                    <form id="equipmentdigitalform" name="equipmentdigitalform" action="{{ route('personalDetail')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <input type="hidden" name="donation_amount" id="donation_amount" value="500000">
                                        <input type="hidden" value="DIGITAL X-RAY ADONIS" name="donation_name">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <img class="img-thumbnail img-fluid shadow img-donate" src="{{ asset('img/DIGITAL%20X-RAY.jpg')}}">
                                            </div>
                                            <div class="col-lg-9">
                                                <h6 class="text-success"><strong>DIGITAL X-RAY ADONIS</strong><br></h6>
                                                <p class="text-success">Adonis High Frequency Auto Programmable X-Ray Systems at an affordable Prices Precision, Power, and Economy makes Adonis High Frequency X-Ray system.</p>
                                                <p class="text-success">Adonis High Frequency X-Ray Machines are powered to meet all Radiological needs at an affordable price. Improve your skin dosage limits and exposure accuracy with our top of the line HF series radiography systems.</p>
                                                <p class="text-success">
                                                    <strong>WHY DO WE NEED IT?</strong>
                                                </p>
                                                <ul>
                                                    <li class="text-success">It is our most trusted, reliable and flexible x-ray machine.</li>
                                                    <li class="text-success">Experience high quality medical imaging with our range of high frequency C-ARMS.<br></li>
                                                </ul>
                                                <p class="text-success">
                                                    <strong>Cost of the equipment : Rs 5,00,000/-</strong>
                                                </p>
                                                <input id="equipmentdigitalsubmit" type="submit" role="button" class="btn btn-success bg-success" value="Sponser Now">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="bg-light border rounded-0 shadow div-livedonate">
                                    <form id="equipmentultraform" name="equipmentultraform" action="{{ route('personalDetail')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <input type="hidden" name="donation_amount" id="donation_amount" value="1500000">
                                        <input type="hidden" value="ULTRASOUND SCAN" name="donation_name">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <img class="img-thumbnail img-fluid shadow img-donate" src="{{ asset('img/ULTRASOUND%20SCAN.jpg')}}">
                                            </div>
                                            <div class="col-lg-9">
                                                <h6 class="text-success"><strong>ULTRASOUND SCAN</strong><br></h6>
                                                <p class="text-success">One of major equipment for usage of pregnancy women care. These scans can provide an expectant mother with the first view of her unborn child. For the pregnancy woman can be scan very month for health condition of her unborn child.</p>
                                                <p class="text-success">Green India Trust conducting free check-up for pregnancy women or other patients in rural areas or slum areas.<br></p>
                                                <p class="text-success"><strong>WHY DO WE NEED IT?</strong></p>
                                                <ul>
                                                    <li class="text-success">Free health check-up pregnancy women or other patients.</li>
                                                    <li class="text-success">Exclusively designed to fit into mobile clinic vehicles.<br></li>
                                                    <li class="text-success">Image will be storage in internal or to printed without using external device.<br></li>
                                                    <li class="text-success">Image quality or accuracy.<br></li>
                                                </ul>
                                                <p class="text-success">
                                                    <strong>Cost of the equipment : Rs 15,00,000/-</strong>
                                                </p>
                                                <input id="equipmentultrasubmit" type="submit" role="button" class="btn btn-success bg-success" value="Sponser Now">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="bg-light border rounded-0 shadow div-livedonate">
                                    <form id="equipmentvehicleform" name="equipmentvehicleform" action="{{ route('personalDetail')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <input type="hidden" name="donation_amount" id="donation_amount" value="1990886">
                                        <input type="hidden" value="VEHICLES USED IN THE MOBILE CLINICS" name="donation_name">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <img class="img-thumbnail img-fluid shadow img-donate1" src="{{ asset('img/vehicle%20image.jpg')}}">
                                            </div>
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
                                                <p class="text-success">
                                                    <strong>Cost Breakup :&nbsp;</strong>
                                                    <a class="text-primary" href="vehicaldetails.html">Vehical Details</a>
                                                </p>
                                                <input id="equipmentvehiclesubmit" type="submit" role="button" class="btn btn-success bg-success" value="Sponser Now">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>
    $("#qty").on("keyup keydown change",function(event){
        var donation_amt = $('#donation_amount').val();
        var qty = $("#qty").val();
        var totamt = parseInt(qty) * parseInt(donation_amt);
        $('#damt').html(totamt);
        $('#donation_amt').val(totamt);
    });

    /*var radiobtns = $('input[name="livamountkeepmother"]', this);
    $('input[name="livamountkeepmother"]').change(function(e) { 
        alert($('input[name="livamountkeepmother"]').val());
        var radiobtns = $('input[name="livamountkeepmother"]');
        alert(radiobtns);

    });*/
    $('#livlihoodkeepmotherform input[name="livamountkeepmother"]').change(function(e) { 
        $('#livlihoodkeepmotherform input[name="livamountkeepmother"]:checked').each(function() {
            var value = $(this).val();
            //alert("value = "+value);
            if(value==''){
                //alert('setting required');
                $('#livlihoodkeepmotherform input[type="text"]').attr("required", true);
            } else {
                //alert('removing required');
                $('#livlihoodkeepmotherform input[type="text"]').removeAttr('required');
            }
        });
    });

    $('#livlihoodorganicform input[name="livlihoodorganic"]').change(function(e) { 
        $('#livlihoodorganicform input[name="livlihoodorganic"]:checked').each(function() {
            var value = $(this).val();
            //alert("value = "+value);
            if(value==''){
                //alert('setting required');
                $('#livlihoodorganicform input[type="text"]').attr("required", true);
            } else {
                //alert('removing required');
                $('#livlihoodorganicform input[type="text"]').removeAttr('required');
            }
        });
    });

    $('#livlihoodtailerform input[name="livlihoodtailer"]').change(function(e) { 
        $('#livlihoodtailerform input[name="livlihoodtailer"]:checked').each(function() {
            var value = $(this).val();
            //alert("value = "+value);
            if(value==''){
                //alert('setting required');
                $('#livlihoodtailerform input[type="text"]').attr("required", true);
            } else {
                //alert('removing required');
                $('#livlihoodtailerform input[type="text"]').removeAttr('required');
            }
        });
    });

    $('#educationscomputerform input[name="educationscomputer"]').change(function(e) { 
        $('#educationscomputerform input[name="educationscomputer"]:checked').each(function() {
            var value = $(this).val();
            alert("value = "+value);
            if(value==''){
                alert('setting required');
                $('#educationscomputerform input[type="text"]').attr("required", true);
            } else {
                alert('removing required');
                $('#educationscomputerform input[type="text"]').removeAttr('required');
            }
        });
    });

    $('#educationsschoolform input[name="educationsschool"]').change(function(e) { 
        $('#educationsschoolform input[name="educationsschool"]:checked').each(function() {
            var value = $(this).val();
            //alert("value = "+value);
            if(value==''){
                //alert('setting required');
                $('#educationsschoolform input[type="text"]').attr("required", true);
            } else {
                //alert('removing required');
                $('#educationsschoolform input[type="text"]').removeAttr('required');
            }
        });
    });

    
    
</script>

@endsection