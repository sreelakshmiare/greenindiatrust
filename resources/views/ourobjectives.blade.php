@extends('layouts.index')
@section('center')

<section class = "section-about">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                
                    <h4 class="text-justify text-success">Our Objectives</h4>
                    <p class="text-justify text-success"><img class="object_img" src="{{ asset('img/objectives.png')}}">
					GIT’s establishment and striving even in its financial constraints are the passion, need and experiences the founding members had, and thus its objectives are genuine, need-based and must-to-be achieved only.
					</p>

					<br/>
					<br/>

					<p class="text-justify text-success"><strong>Our Board Objectives </strong>
                    <!--<a class="btn btn-success" href="{{route('boardobjectives')}}">Click Here</a>-->

                    <a class="btn btn-outline-success active btn-lg bg-success border-success shadow-lg" 
                        data-bs-hover-animate="pulse" type="button" 
                        href="{{route('boardobjectives')}}">Click Here</a>&nbsp; &nbsp;<br>
                      

					</p>
							
               
            </div>
            
        </div>
    </div>
</section>

@endsection