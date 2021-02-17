@extends('layouts.index')
@section('center')

<section class = "section-about">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">

                    <h4 class="text-justify text-success">And the Award goes to....</h4>


					<p class="text-justify text-success">
                        During the course of 10 years of voluntary service and collective efforts,
                        GIT has been recognized and commended state, regional, national and
                        international levels. We are not in culmination of what we could do,
                        but in frustration, as our objectives are for a balanced nature and
                        conserved environment still not yet accomplished. But the Awards, Recognitions,
                        Commendations and all make our steps for perfervid to make smart moves every time.
					</p>
			 </div>
        </div>
    </div>
</section>




    <section class="section-about">
        <div class="container">
            <div class="row">


                <div class="col-lg-3 offset-lg-0">
                    <a href="#" data-target="#modalIMG11" data-toggle="modal"
                        class="color-gray-darker c6 td-hover-none">
                        <div class="ba-0 ds-1">
                            <img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse"
                                src="{{ asset('img/award11.jpg')}}" />
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 offset-lg-0">
                    <a href="#" data-target="#modalIMG12" data-toggle="modal"
                        class="color-gray-darker c6 td-hover-none">
                        <div class="ba-0 ds-1">
                            <img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse"
                                src="{{ asset('img/award10.jpg')}}" />
                        </div>
                    </a>

                </div>
                <div class="col-lg-3 offset-lg-0">
                    <a href="#" data-target="#modalIMG13" data-toggle="modal"
                        class="color-gray-darker c6 td-hover-none">
                        <div class="ba-0 ds-1">
                            <img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse"
                                src="{{ asset('img/award12.png')}}" />
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 offset-lg-0">
                    <a href="#" data-target="#modalIMG14" data-toggle="modal"
                        class="color-gray-darker c6 td-hover-none">
                        <div class="ba-0 ds-1">
                            <img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse"
                                src="{{ asset('img/BioDiversityConserver.png')}}" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
	<section class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 offset-lg-0">
                    <a href="#" data-target="#modalIMG21" data-toggle="modal"
                        class="color-gray-darker c6 td-hover-none">
                        <div class="ba-0 ds-1">
                            <img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse"
                                src="{{ asset('img/award2.jpg')}}" />
                        </div>
                    </a>

                        </div>
                <div class="col-lg-3 offset-lg-0">
                    <a href="#" data-target="#modalIMG22" data-toggle="modal"
                        class="color-gray-darker c6 td-hover-none">
                        <div class="ba-0 ds-1">
                            <img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse"
                                src="{{ asset('img/award4.jpg')}}" />
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 offset-lg-0">
                    <a href="#" data-target="#modalIMG23" data-toggle="modal"
                        class="color-gray-darker c6 td-hover-none">
                        <div class="ba-0 ds-1">
                            <img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse"
                                src="{{ asset('img/award5.jpg')}}" />
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 offset-lg-0">
                    <a href="#" data-target="#modalIMG24" data-toggle="modal"
                        class="color-gray-darker c6 td-hover-none">
                        <div class="ba-0 ds-1">
                            <img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse"
                                src="{{ asset('img/award8.jpg')}}" />
                        </div>
                    </a>
                        </div>
            </div>
        </div>
    </section>
    <section class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-0">
                    <a href="#" data-target="#modalIMG31" data-toggle="modal"
                        class="color-gray-darker c6 td-hover-none">
                        <div class="ba-0 ds-1">
                            <img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse"
                                src="{{ asset('img/award1.jpg')}}" />
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 offset-lg-0">
                    <a href="#" data-target="#modalIMG32" data-toggle="modal"
                        class="color-gray-darker c6 td-hover-none">
                        <div class="ba-0 ds-1">
                            <img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse"
                                src="{{ asset('img/award10.jpg')}}" />
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 offset-lg-0">
                    <a href="#" data-target="#modalIMG33" data-toggle="modal"
                        class="color-gray-darker c6 td-hover-none">
                        <div class="ba-0 ds-1">
                            <img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse"
                                src="{{ asset('img/award3.jpg')}}" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG11" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body mb-0 p-0">
                    <img src="{{ asset('img/award11.jpg')}}" alt="" style="width:100%">
                </div>
                <div class="modal-footer">
                    <div><a href="{{ asset('img/award11.jpg')}}" target="_blank">Download</a></div>
                    <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG12" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body mb-0 p-0">
                    <img src="{{ asset('img/award9.png')}}" alt="" style="width:100%">
                </div>
                <div class="modal-footer">
                    <div><a href="{{ asset('img/award9.png')}}" target="_blank">Download</a></div>
                    <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG13" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body mb-0 p-0">
                    <img src="{{ asset('img/award12.png')}}" alt="" style="width:100%">
                </div>
                <div class="modal-footer">
                    <div><a href="{{ asset('img/award12.png')}}" target="_blank">Download</a></div>
                    <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG14" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body mb-0 p-0">
                    <img src="{{ asset('img/BioDiversityConserver.png')}}" alt="" style="width:100%">
                </div>
                <div class="modal-footer">
                    <div><a href="{{ asset('img/BioDiversityConserver.png')}}" target="_blank">Download</a></div>
                    <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG21" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body mb-0 p-0">
                    <img src="{{ asset('img/award2.jpg')}}" alt="" style="width:100%">
                </div>
                <div class="modal-footer">
                    <div><a href="{{ asset('img/award2.jpg')}}" target="_blank">Download</a></div>
                    <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG22" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body mb-0 p-0">
                    <img src="{{ asset('img/award4.jpg')}}" alt="" style="width:100%">
                </div>
                <div class="modal-footer">
                    <div><a href="{{ asset('img/award4.jpg')}}" target="_blank">Download</a></div>
                    <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG23" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body mb-0 p-0">
                    <img src="{{ asset('img/award5.jpg')}}" alt="" style="width:100%">
                </div>
                <div class="modal-footer">
                    <div><a href="{{ asset('img/award5.jpg')}}" target="_blank">Download</a></div>
                    <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG24" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body mb-0 p-0">
                    <img src="{{ asset('img/award8.jpg')}}" alt="" style="width:100%">
                </div>
                <div class="modal-footer">
                    <div><a href="{{ asset('img/award8.jpg')}}" target="_blank">Download</a></div>
                    <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG31" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body mb-0 p-0">
                    <img src="{{ asset('img/award1.jpg')}}" alt="" style="width:100%">
                </div>
                <div class="modal-footer">
                    <div><a href="{{ asset('img/award1.jpg')}}" target="_blank">Download</a></div>
                    <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG32" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body mb-0 p-0">
                    <img src="{{ asset('img/award10.jpg')}}" alt="" style="width:100%">
                </div>
                <div class="modal-footer">
                    <div><a href="{{ asset('img/award10.jpg')}}" target="_blank">Download</a></div>
                    <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>-->

    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG33" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body mb-0 p-0">
                    <img src="{{ asset('img/award3.jpg')}}" alt="" style="width:100%">
                </div>
                <div class="modal-footer">
                    <div><a href="{{ asset('img/award3.jpg')}}" target="_blank">Download</a></div>
                    <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
<script>
    $( 'a a' ).remove();
		document.documentElement.setAttribute("lang", "en");
		document.documentElement.removeAttribute("class");
	</script>
@endsection
