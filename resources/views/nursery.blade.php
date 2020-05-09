@extends('layouts.index')
@section('center')

<section class = "section-about">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                
                    <h4 class="text-justify text-success">Green India Trust Nursery:</h4>
                    <p class="text-justify text-success"><img class = "para_img float-right" src=" {{asset('img/nursery.jpg') }}" > Green India trust is focused the own Nursery plant. The nursery is developed the own way by using the women empower to create employee opportunities. The nursery developed without profit and is near locate the rural area. 
					</p>

					<p class="text-justify text-success">The saplings grown on the nursery bed are needed to be removed after 2-3 months and to be shifted to planting site or in poly-bags. Saplings in the poly-bags can be kept for the year as per plantation need. The plant height of 45-60 cm is best for plantation.  The after-care like watering, weeding and inter-culture to keep soil well aerated to be done.
					</p>
						
					
               
            </div>
            
        </div>
    </div>
</section>
    <div class="container">
        <h6 class="text-success">List of Green India Nursery in various loctations:<br></h6>
        <h6 class="text-success">1) &nbsp;Iskan City Nellore<br></h6>
        <div class="row">
            <div class="col-lg-4 offset-lg-0"><img class="para_img" src="{{asset('img/nursery1.jpg') }}"></div>
            <div class="col-lg-5 offset-lg-1"><img class="para_img" src=" {{asset('img/nursery2.jpg') }}"></div>
        </div>
    </div>
    <section class="section-about">
        <div class="container">
            <h6 class="text-success">2) Varakaipudi, Nellore&nbsp;<br></h6>
            <div class="row">
                <div class="col-lg-5 offset-lg-0"><img class="para_img" src=" {{ asset('img/nursery3.jpg') }}"></div>
                <div class="col-lg-5 offset-lg-0"><img class="para_img" src=" {{ asset('img/nursery4.jpg') }}"></div>
            </div>
        </div>
    </section>
    <section class="section-about">
        <div class="container">
            <h6 class="text-success">3)&nbsp;Mulbagal, Karnataka<br></h6>
            <div class="row">
                <div class="col-lg-5 offset-lg-0"><img class="para_img" src=" {{ asset('img/nursery5.jpg') }}"></div>
                <div class="col-lg-5 offset-lg-0"><img class="para_img" src=" {{ asset('img/nursery6.jpg') }}"></div>
            </div>
        </div>
    </section>



@endsection