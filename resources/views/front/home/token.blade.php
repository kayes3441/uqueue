@extends('master.front.master')

@section('body')
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg "  id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{route('home')}}">
                    U-Queue </a>
            </div>
        </div>
    </nav>
    <div class="page-header header-filter" style="background-image:url({{asset('/')}}front/assets/img/bg7.jpg); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-6 ml-auto mr-auto">
                    <div class="card card-signup card-plain bg-primary">

                        <h5 class="card-category card-category-social text-center">
                            <p4>hi,{{Session::get('name')}} please Check your email we send you details ..</p4>
                        </h5>
                        <h5 class="card-category card-category-social text-center">
                            <i class="fa fa-newspaper-o"></i> Your Token No : {{$queue->token}}
                        </h5>
                        <h5 class="card-category card-category-social text-center">
                            <i class="fa fa-newspaper-o"></i> Your Serial No : {{$queue->serial}}
                        </h5>
                        <a href="{{route('home')}}" class="btn btn-danger">Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

