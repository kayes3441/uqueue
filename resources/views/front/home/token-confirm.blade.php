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
                <form action="{{route('get.token')}}" method="post">
                    @csrf
                    <div class="col-lg-8 col-md-6 ml-auto mr-auto">
                        <div class="card card-signup card-plain bg-primary">
                            <div class="card-body justify-content-center">
                                <h3 class="card-category card-category-social text-center">
                                    <i class="fa fa-newspaper-o"></i> Hi, {{Session::get('name')}}
                                </h3>
                                <h4 class="card-title text-center">
                                    <a href="#"> </a>
                                    <p>Email : {{Session::get('email')}}</p>
                                </h4>
                                <h4 class="card-title text-center">
                                    <a href="#"> </a>
                                    <p>Service Name : {{$service->name}}</p>
                                </h4>
                                <h4 class="card-title text-center">
                                    <a href="#"> </a>
                                    <p>Room Number: {{$service->room->number}}</p>
                                </h4>
                                <h4 class="card-title text-center">
                                    <a href="#"> </a>
                                    <p>Time : {{Session::get('date')}} at {{Session::get('time')}}</p>
                                </h4>
                                <p class="card-description text-center">
                                    Would you like to confirm your serial for the given time ? If yes then please click Confirm else click Cancel.
                                    Thank you.
                                </p>
                                <div class="row m-auto">
                                    <input type="submit" name="submit" class="btn btn-white btn-round ml-auto" value="Cancel">
                                    <input type="submit" name="submit" class="btn btn-white btn-round mr-auto" value="Confirm">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
