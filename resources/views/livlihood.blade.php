@extends('layouts.index')
@section('center')
<section class = "section-about">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                
                    <h4 class="text-justify text-success">Livelihood:</h4>
                    <p class="text-justify text-success"><img class = "para_img float-right" src="{{ asset('img/livelihood.jpg')}}" > The livelihood and community development projects implemented by Green India Trust have a holistic approach encompassing many components of education, skills training, capacity building and awareness. The projects work in sync with government development programmes and facilitate linkages to public services and schemes for the project beneficiaries. Each community development project is attuned to local needs, through an initial need assessment, wherein the local needs are identified and the final design and outcomes of the project are decided. Each project aims to ultimately enable the beneficiaries to become change makers in their communities. 
					</p>

					<p class="text-justify text-success">Cross cutting areas of intervention under community development and livelihood are: </p>

						<ol class="orderlist text-justify text-success">
							<li class="text-justify text-success"><strong>Education:</strong>Educational initiatives for pre-schoolers, remedial training and adult literacy are routinely integrated into the projects. And also provided the free computer training.</li>
							<li class="text-justify text-success"><strong>Women Empowerment:</strong>Projects under this segment engage in women empowerment through education and training, capacity building, awareness activities and facilitation of self help groups (SHG Groups) and access to government schemes. </li>
							<li class="text-justify text-success"><strong>Skill Development:</strong>Training programmes on skill development are implemented, to help improve the employability of the working population including school drop-outs, semi-skilled and un-skilled workers. These programmes include vocational training and digital literacy. i.e. tailoring</li>
							<li class="text-justify text-success"><strong>Agriculture:</strong>Green India rust under takes focused interventions in agriculture, horticulture and livestock management. Such interventions have been designed to improve efficiency in production systems, lower input costs, increase per capita output, and improve food and nutritional security at household level. i.e mushrooming training.</li>
						
						</ol>

					
               
            </div>
            
        </div>
    </div>
</section>
    <section class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-1">
                    <h6 class="text-success">SHG Group</h6><img class="para_img" src="{{ asset('img/shggroup.jpg')}}"></div>
                <div class="col-lg-4 offset-lg-1">
                    <h6 class="text-success">Computer Training</h6><img class="para_img" src="{{ asset('img/comptraining.jpg')}}"></div>
            </div>
        </div>
    </section>
@endsection