@extends('frontend.front_master')

@section('content')
<!-- Home Page Banner -->
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <img class="img img-fluid" src="{{asset('/images/banner.jpg')}}" alt="website-banner">
        </div>
        <div class="col-sm-12 col-lg-6">
            <div class="row"> 
                <div class="col-sm-12 pt-5 ps-4">
                    <span class="text-primary display-1" style="">Online</span> <br>
                    <span class="fw-bold text-danger display-1">Blood</span> 
                    <span class="display-1">Bank</span><br><br>
                    <span>With this platform you can share or find blood for free. Our website doesn't charge for any of our services, but you might need to pay for donator.</span>
                    
                </div>
                <div class="col-sm-12 text-center">
                        <a href="{{route('login')}}" class="btn btn-outline-primary w-50 py-2 mt-5" style="font-size:22px;">Login</a><br>
                        <a href="{{route('register')}}" class="btn btn-outline-primary w-50 py-2 mt-1" style="font-size:22px;">Register</a>
            </div> 
        </div>
    </div>
</div>
</div>

<!-- Service Details  -->

<div class="container">
    <div class="row p-3">

        <div class="col-sm-12 col-md-6 mb-2">
            <div class="card-body">
            <b>Title</b><br>
            This is some text within a card body. This is some text within a card body. This is some text within a card body. This is some text within a card body.This is some text within a card body.This is some text within a card body.This is some text within a card body.
            </div>
        </div>

        <div class="col-sm-12 col-md-6 mb-2">
            <div class="card-body">
            <b>Title</b><br>
            This is some text within a card body. This is some text within a card body. This is some text within a card body. This is some text within a card body.This is some text within a card body.This is some text within a card body.This is some text within a card body.
            </div>
        </div>

        <div class="col-sm-12 col-md-6 mb-2">
            <div class="card-body">
            <b>Title</b><br>
            This is some text within a card body. This is some text within a card body. This is some text within a card body. This is some text within a card body.This is some text within a card body.This is some text within a card body.This is some text within a card body.
            </div>
        </div>

        <div class="col-sm-12 col-md-6 mb-2">
            <div class="card-body">
            <b>Title</b><br>
            This is some text within a card body. This is some text within a card body. This is some text within a card body. This is some text within a card body.This is some text within a card body.This is some text within a card body.This is some text within a card body.
            </div>
        </div>

    </div>
</div>




@endsection