@extends('layouts.index')
@section('center')

<section class="section-about">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="text--justify text-success"><strong>Crowd Fundraising</strong></h4>
<p class="text--justify text-success"><strong> Start A Campaign:</strong> Sign in or register and create an online fundraising campaign by filling in the required details.
<br/>
<strong>Create Awareness:</strong> Once the campaign has been created, share the link on Face book, Twitter and other social media channels and let your friends know.
<br/>
<strong>Raise Funds:</strong> Tell your friends and family that they can support Green India by contributing to your purposeful campaign.<br/>

<strong>Make an Impact:</strong> Know that all the funds raised through your campaign will be utilised to plantation in the rural areas and conduct the free medical camps.
</p></div>
            <div class="col-lg-4 offset-lg-0"><img class="para_img" src="{{ asset('img/fundraising.jpg')}}"><a class="btn btn-success btn-sm text-white border rounded-0 fund-button" role="button" href="{{route('getActiveFundraiseList')}}">Start Fundraising</a></div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row"> 

<div class = "col-md-12">
<h6 class = "text-success"><strong>What is a fundraising campaign?</strong></h6>
    <ol class = "orderlist text-success">
        
        <li class="text-success">A fundraising campaign is an initiative to gather voluntary contributions by involving your friends and family. The money raised in these campaigns will be used to free plantation in the rural areas.</li>
        <li class="text-success">You can take up an online fundraising campaign on the website. Once you pick a fundraising idea and complete the required formalities, your campaign will be live. You can then share it on your social media channels to create awareness regarding the same, and get people to donate to the campaign.</li>
        <li class="text-success">You can celebrate special occasions with us-birthdays, anniversaries and the like-by creating a fundraising campaign.</li>
        <li class="text-success">You can also fix upon a charity fundraising amount you want to raise. </li>
    </ol>


<h6 class = "text-success"><strong>Why do we need your support?</strong></h6>
    <ol class = "orderlist text-success">	
        <li class="text-success">The GREEN INDIA TRUST is an NGO working towards ensuring that plantation tree in rural areas and medical awareness camping conducted.</li>
        <li class="text-success">By fundraising for this NGO, you will be indirectly ensuring that the future of this country is well-informed and takes the country towards positive growth.</li>
    </ol>
    
</div>




</div>
    </div>
</section>

@endsection