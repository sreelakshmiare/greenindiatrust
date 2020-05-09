@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p> Name: {!! Auth::user()->name !!}</p>
                    <p>Email: {!! Auth::user()->email !!}</p>

                    <a href="{{ route('main')}}"  class="btn btn-warning">Main Website</a>
                    @if($userData->admin_level == 1)
                        <a href="{{ route('adminDisplayMenus')}}" class="btn btn-success">Admin Dashboard</a>
                    @else
                        <div class="btn btn-success">You are not an admin</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
