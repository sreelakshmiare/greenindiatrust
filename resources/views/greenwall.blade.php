@extends('layouts.index')
@section('center')

<section class = "section-about">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                
                    <h4 class="text-justify text-success">Green Wall and Researches:</h4>
                    <p class="text-justify text-success"><img class = "para_img float-right" src="{{ asset('img/green.jpg')}}" >Coastal Resources are of much help to the mankind. Ecosystems of		coastal resources have specific impacts on human life. This “Green Wall” Project deals with issues related to Palmyra covers and other forms of plantation.
						The “Green Wall” Project of Green India Trust will establish a systematic management of plantation ecosystem to secure this valuable resource. 
					</p>

					<p class="text-justify text-success">The “Green Wall” project will play a role as an active agency for prevention of the Palmyra covers, Palmyra conservation and restoration. The increase in Palmyra area will help the coastal community by way of easy access to fuel wood and small timber requirement through sustainable harvesting. Since there will be a community based approach, the community will have a feeling of owning the Project and the Concept will be a sustainable one, in the long run. 
					</p>
						
					
               
            </div>
            
        </div>
    </div>
</section>
    <section>
<!--
    <div class="col offset-lg-3">
                    <a href="#" data-target="#modalIMG11" data-toggle="modal"
                        class="color-gray-darker c6 td-hover-none">
                        <div class="ba-0 ds-1">
                            <img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse"
                                src="{{ asset('img/greenwall.jpg')}}" />
                        </div>
                    </a>
                </div>
-->
     <div class="container">
            <div class="row">
                <div class="col offset-lg-3">

                <a href="#" data-target="#modalIMG11" data-toggle="modal"
                        class="color-gray-darker c6 td-hover-none">
                        <div class="ba-0 ds-1">

                        <img class="img-thumbnail img-fluid shadow greenwall" data-bs-hover-animate="pulse"
                                src="{{ asset('img/greenwall.jpg')}}"  width="400" height="300" />

                   <!-- <img class="img-fluid border rounded-0" src="{{ asset('img/greenwall.jpg')}}" 
                    width="400" height="300">-->
                </div>
            </div>
        </div>
        
        <section>
            <div class="container">
                <div class="row"> 

<div class = "col-md-12">
	<h6 class = "text-success mt-auto"><strong>The Project Location:</strong></h6>
		<ol class = "orderlist text-success">
			<li> Phase I: 2,55,250 Plantation along 30 Km stretch of Krishnapatanam to Mypadu Coastal Line.</li>
			<li>Phase II : 17,32,500 Plantation along 270 Km stretch of Krishnapatanam to Guntur Coastal Line.</li>
		</ol>

</div>

</div>
            </div>
            <div class="container">
                <div class="row"> 

<div class = "col-md-12">
	<h6 class = "text-success"><strong>Environmental Impacts:</strong></h6>
		<ol class = "orderlist text-success">
			
		<li class="text-success">Conservation of habitat niche with reference to certain species enhances biodiversity.</li>
			<li class="text-success">Enhance ground water recharge, reduce littering and pollution.</li>
			<li class="text-success">Promotes ecological succession and stabilization of the coastal line.</li>
			<li class="text-success">Conservation of habitats/ecosystems enhances biodiversity.</li>
			<li class="text-success">The ecosystems/habitats provide facility for roosting, spawning and breeding ground for many species both aerial and aquatic species.</li>
			<li class="text-success">Checks salinity ingression and control disasters such as erosion, sea surges and cyclones (Mangroves, Sea grasses, beeches, Sand dunes etc.</li>
			<li class="text-success">Enhances availability of resources such as fisheries, fodder, etc (mangroves, coral, sea grasses, mud banks, mudflats etc.)</li>
			<li class="text-success">Mudflats supports ecological succession towards halophytic vegetation.</li>
		</ol>
		
</div>
	



 

<div class = "col-md-12">
	<h6 class = "text-success"><strong>Environmental Impacts:</strong></h6>
		<ol class = "orderlist text-success">
			
			<li class="text-success">People have been alerted on chances of occurrence of natural hazards and will be more vigilant.</li>
			<li class="text-success">Aesthetic value of the area being maintained.</li>
			<li class="text-success">Chances for enhanced livelihood improvement activities from coastal habitats and ecosystems.</li>
			<li class="text-success"> Increased opportunities for local economic development through non destructive ways such as conduct of tourism (Mangroves, Corals, beeches, Sand dunes) etc.</li>
			<li class="text-success">Provide increased security from natural disasters (mangroves, corals, sea grasses, beeches, Sand dunes etc.</li>
			<li class="text-success"> Conservation habitats checks salinity ingression will enhance drinking water availability (mangroves, beeches, sand dunes, salt marshes etc)</li>
		</ol>
		
</div>
	




    
    
    
   
    
   
</div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1"><img class="para_img" src="{{ asset('img/green1.jpg')}}"></div>
                    <div class="col-lg-5 offset-lg-1"><img class="para_img" src="{{ asset('img/green2.jpg')}}"></div>
                </div>
            </div>
        </section>
    </section>

@endsection
