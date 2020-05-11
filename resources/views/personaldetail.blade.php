@extends('layouts.index')
@section('center')

<div class="container">
    <h5 class="text--justify text-success">Personal Information</h5>
</div>
<section class="section-about">
    <div class="panel">
        <div class="container">
            <form>
                <div class="form-row">
                    <div class="col-lg-6 form-group"><input class="form-control" type="text" placeholder="Firstname"></div>
                    <div class="col-lg-6 form-group"><input class="form-control" type="text" placeholder="Lastname"></div>
                </div>
            </form>
        </div>
        <div class="container">
            <form>
                <div class="form-row">
                    <div class="col-lg-6 form-group"><input class="form-control" type="email" placeholder="Email"></div>
                    <div class="col-lg-6 form-group"><input class="form-control" type="password" placeholder="Password"></div>
                </div>
            </form>
        </div>
        <div class="container">
            <form>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group"><input class="form-control" type="text" placeholder="Address"></div>
                    </div>
                </div>
            </form>
        </div>
        <div class="container">
            <form>
                <div class="form-row">
                    <div class="col-lg-6 form-group"><input class="form-control" type="text" placeholder="City"></div>
                    <div class="col-lg-4 form-group"><select class="form-control"><optgroup label="This is a group"><option value="12" selected="">Choose State</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
                    <div
                        class="col-lg-2 form-group"><input class="form-control" type="text" placeholder="Zip"></div>
        </div>
        </form>
    </div>
    <div class="container">
        <form>
            <div class="form-row">
                <div class="col-lg-6 form-group"><input class="form-control" type="number" placeholder="Aadhar No."></div>
                <div class="col-lg-4 form-group"><input class="form-control" type="number" placeholder="PAN"></div>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="row">
            <div class="col"><a class="btn btn-success" role="button" href="razorpay.html">Sign in</a></div>
        </div>
    </div>
    </div>
</section>
@endsection