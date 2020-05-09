@extends('layouts.index')
@section('center')

<section class = "section-about">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                
                    <h4 class="text-justify text-success">And the Award goes to....</h4>
					

					<p class="text-justify text-success">During the course of 10 years of voluntary service and collective efforts, GIT has been recognized and commended state, regional, national and international levels. We are not in culmination of what we could do, but in frustration, as our objectives are for a balanced nature and conserved environment still not yet accomplished. But the Awards, Recognitions, Commendations and all make our steps for perfervid to make smart moves every time.
					</p>
						
			</div>
            
        </div>
    </div>
</section>
					
		<section class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 offset-lg-0"><img class="award-img" src="{{ asset('img/limca-record.jpg') }}"></div>
                <div class="col-lg-3 offset-lg-0"><img class="award-img" src="{{ asset('img/IndiaBookOfRecords.png') }}"></div>
                <div class="col-lg-3 offset-lg-0"><img class="award-img" src="{{ asset('img/ScheduleOfWorldCongress.png') }}"></div>
                <div class="col-lg-3 offset-lg-0"><img class="award-img" src="{{ asset('img/BioDiversityConserver.png') }}"></div>
            </div>
        </div>
    </section>

@endsection