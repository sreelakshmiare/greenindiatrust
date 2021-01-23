@extends('layouts.index')
@section('center')
<section class="section-about">
    <div class="container">
        <section class="bg-light section-about">
            <div class="container text-center">
                <h4 class="text-center text-success div-head"><b>NEWS AND EVENTS</b></h4>
            </div>
            <hr>
            <div class = "container">
                <div class="row">
                    <div class="col">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active text-center">
                                    <div class="card mr-2 d-inline-block shadow-lg" style=" height: 25rem; width: 65rem">
                                        <div class="card-img-top">
                                            <marquee behavior="scroll" direction="up" style="margin: 1px 5px 1px 5px; height:200px;">
                                                @foreach ($newsandevents as $item)
                                                    <p class="text-center">{{ $item->news_events}}</p>
                                                @endforeach
                                            </marquee>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-lg-3">
                <a href="#" data-target="#modalIMG1" data-toggle="modal" class="color-gray-darker c6 td-hover-none">
					<div class="ba-0 ds-1">
                        <img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse"
                        src="{{ asset('img/news1.jpg')}}" />
					</div>
                </a>
            </div>

            <div class="col-lg-3"><a href="#" data-target="#modalIMG2" data-toggle="modal" class="color-gray-darker c6 td-hover-none">
                <div class="ba-0 ds-1">
                    <img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse"
                    src="{{ asset('img/news2.jpg')}}" />
                </div>
            </a></div>
            <div class="col-lg-3"><a href="#" data-target="#modalIMG3" data-toggle="modal" class="color-gray-darker c6 td-hover-none">
                <div class="ba-0 ds-1">
                    <img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse"
                    src="{{ asset('img/news3.png')}}" />
                </div>
            </a></div>
            <div class="col-lg-3"><a href="#" data-target="#modalIMG4" data-toggle="modal" class="color-gray-darker c6 td-hover-none">
                <div class="ba-0 ds-1">
                    <img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse"
                    src="{{ asset('img/news5.jpg')}}" />
                </div>
            </a></div>
        </div>
    </div>
</section>

<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG1" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body mb-0 p-0">
                <img src="{{ asset('img/news1.jpg')}}" alt="" style="width:100%">
            </div>
            <div class="modal-footer">
                <div><a href="{{ asset('img/news1.jpg')}}" target="_blank">Download</a></div>
                <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>

<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG2" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body mb-0 p-0">
                <img src="{{ asset('img/news2.jpg')}}" alt="" style="width:100%">
            </div>
            <div class="modal-footer">
                <div><a href="{{ asset('img/news2.jpg')}}" target="_blank">Download</a></div>
                <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>

<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG3" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body mb-0 p-0">
                <img src="{{ asset('img/news3.png')}}" alt="" style="width:100%">
            </div>
            <div class="modal-footer">
                <div><a href="{{ asset('img/news3.png')}}" target="_blank">Download</a></div>
                <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>

<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG4" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body mb-0 p-0">
                <img src="{{ asset('img/news5.jpg')}}" alt="" style="width:100%">
            </div>
            <div class="modal-footer">
                <div><a href="{{ asset('img/news5.jpg')}}" target="_blank">Download</a></div>
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
