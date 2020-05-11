@extends('layouts.index')
@section('center')

<section class = "section-about">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                
                    <h4 class="text-justify text-success">Brillion Tree Plantation Project Profile</h4>
                    
				<p class="text-justify text-success"><img class = "para_img float-right" src="{{ asset('img/BillionTreePlantation.jpg')}}" >
					The billion-tree plantation (Or  One Billion Tree Plantation) efforts towards environment protection reducing GHG, Carbon persistence as a mitigation measure, is one and only such a huge project in India and it is one of the largest projects of GIT to plant long-life tree saplings mainly and primarily over the coastal belts, seashores, agro-lands (vulnerable to sea waves/tides/tsunami/tides), road sides, school/college courtyards/campuses, Govt. Offices, Revenue hillocks, Revenue Waste lands, CPRs, Semi-forests, open lands (Govt. and Pvt.) with involvement of communities, CBOs, NGOs, and school/college children etc. It also conducts many awareness creation, training, debate, educative, mobilizing activities and thus the proposed project will have the following major components.
					
					
				</p>
			
			</div>
         </div>
    </div>
</section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="list-unstyled">
                        <li class="text-success"><i class="fa fa-check"></i>&nbsp;Awareness Creation and Capacity Building.<br></li>
                        <li class="text-success"><i class="fa fa-check"></i>&nbsp;Formation of Community Structures.<br></li>
                        <li class="text-success"><i class="fa fa-check"></i>&nbsp;Nursery Development and Planting Materials.<br></li>
                        <li class="text-success"><i class="fa fa-check"></i>&nbsp;Procurement of quality saplings and stems.<br></li>
                        <li class="text-success"><i class="fa fa-check"></i>&nbsp;Minor and necessary WRD and SMS activities.<br></li>
                        <li class="text-success"><i class="fa fa-check"></i>&nbsp;Plantation and Nurturing of saplings – (Plantation).<br></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6"><img class="para_img" src="{{ asset('img/canvas.png')}}"></div>
            <div class="col-lg-6"><img class="para_img" src="{{ asset('img/canvas1.png')}}"></div>
        </div>
    </div>
    @endsection
