@extends('layouts.index')
@section('center')

<section class = "section-about">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">

                    <h4 class="text-justify text-success">Education:</h4>
                    <p class="text-justify text-success">Green India trust to educate the local man power and to create the awareness program in rural areas often urge their children to take up domestic tasks or help in labor, instead of helping them attain an education. To motivate further, we have worked to shed light on government policies and schemes, which have been implemented for their benefit. We conduct sessions and explain the students and their parents about the opportunities that aries after post education. We help them understand about the various jobs they can do after completing education.
					</p>

					<p class="text-justify text-success">Green India Trust is committed to raising the level of education and literacy in rural areas and helping disadvantaged children realize their full potential. The project seeks to ensure quality education for children in rural areas, opening the door for them to participate in and benefit from India's economic growth.</p>

					<p class="text-justify text-success">Today, we provide educational facilities on the free computer training center in the rural area is in the mandal praja prishd primary school,Nandala gunta, Nellore and SHG Indiramma Colony, Venkatachalam.</p>

						</div>

        </div>
    </div>
</section>

<section class="section-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-0">
                <a href="#" data-target="#modalIMG" data-toggle="modal" class="color-gray-darker c6 td-hover-none">
					<div class="ba-0 ds-1">
						<img class="para_img" src="{{ asset('img/education.jpg')}}" />
					</div>
				</a>
            </div>
            <div class="col-lg-4 offset-lg-0">
                <a href="#" data-target="#modalIMG2" data-toggle="modal" class="color-gray-darker c6 td-hover-none">
					<div class="ba-0 ds-1">
						<img class="para_img" src="{{ asset('img/education2.jpg')}}" />
					</div>
                </a>
            </div>
            <div class="col-lg-4 offset-lg-0">
                <a href="#" data-target="#modalIMG3" data-toggle="modal" class="color-gray-darker c6 td-hover-none">
					<div class="ba-0 ds-1">
						<img class="para_img" src="{{ asset('img/education3.jpg')}}" />
					</div>
				</a>
            </div>



            <a href="{{route('gallery')}}" class="btn btn-outline-success active btn-lg text-right bg-success border-success shadow-lg"
                role="button" data-bs-hover-animate="pulse">More...</a>
         </div>

         <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <img src="{{ asset('img/education.jpg')}}" alt="" style="width:100%">
                    </div>
                    <div class="modal-footer">
                        <div><a href="{{ asset('img/education.jpg')}}" target="_blank">Download</a></div>
                        <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG2" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <img src="{{ asset('img/education2.jpg')}}" alt="" style="width:100%">
                    </div>
                    <div class="modal-footer">
                        <div><a href="{{ asset('img/education2.jpg')}}" target="_blank">Download</a></div>
                        <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG3" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <img src="{{ asset('img/education3.jpg')}}" alt="" style="width:100%">
                    </div>
                    <div class="modal-footer">
                        <div><a href="{{ asset('img/education3.jpg')}}" target="_blank">Download</a></div>
                        <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>
            </div>
        </div>


</section>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>
    $( 'a a' ).remove();
		document.documentElement.setAttribute("lang", "en");
		document.documentElement.removeAttribute("class");
	</script>
@endsection
