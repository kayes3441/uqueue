@extends('master.front.master')
@section('my-css')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
@endsection
@section('body')
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg "  id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{route('home')}}">
                    U-Queue </a>
            </div>
        </div>
    </nav>
    <div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('{{asset('/')}}front/assets/img/bg0.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand"><h1>
                            U-Queue
                        </h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="section section-basic">
            <div class="container">
{{--                <div class="row justify-content-center">--}}
{{--                    <button class="btn btn-primary btn-raised btn-round col-lg-4 col-sm-2" data-toggle="modal" data-target="#signupModal">--}}
{{--                        Get Token--}}
{{--                    </button>--}}
{{--                    <h5 class="text-center text-danger">{{Session::get('message')}}</h5>--}}
{{--                </div>--}}
                <div class="text-center text-danger"></div>
                <form action="{{route('search')}}" method="post">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-sm-4">
                            <div class="form-group">
                                <label for="exampleInput1" class="bmd-label-floating">Enter Token</label>
                                <input type="search" name='search' class="form-control">
                                <span class="bmd-help">You will be able to see your serial in details (Put the token as it is.Case Sensative)</span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-raised btn-round">
                            <i class="material-icons">search</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
   <div class="" style="margin-top: 70px">
       <h3 class="modal-title card-title text-center">Get Your Serial/Appointment</h3>
       <div class="row">
           <div class="col-md-5 ml-auto mb-5">
               <div class="info info-horizontal">
                   <div class="icon icon-rose">
                       <i class="material-icons">double_arrow</i>
                   </div>
                   <div class="description">
                       <h4 class="info-title">Quick</h4>
                       <p class="description">
                           U-Queue provide remote registration. You can get an appoitment,serial,token from any where like home , car , hotel or movie theatre.
                       </p>
                   </div>
               </div>
               <div class="info info-horizontal">
                   <div class="icon icon-primary">
                       <i class="material-icons">devices_other</i>
                   </div>
                   <div class="description">
                       <h4 class="info-title">Fully Responsive</h4>
                       <p class="description">
                           You can use any device you are using. our software is device friendly.
                       </p>
                   </div>
               </div>
           </div>
           <div class="col-md-5 mr-auto" style="margin-top: 45px">
               <form action="{{route('token.confirm')}}" method="post" >
                   @csrf
                   <div class="card-body">
                       <div class="form-group">
                           <div class="input-group">
                               <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">face</i>
                                                </span>
                               </div>
                               <input type="text" class="form-control" placeholder="First Name..." name="name">
                           </div>
                       </div>
                       <div class="form-group">
                           <div class="input-group">
                               <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">mail</i>
                                                </span>
                               </div>
                               <input type="email" class="form-control" placeholder="Email..." name="email">
                           </div>
                       </div>
                       <div class="form-group">
                           <div class="input-group">
                               <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">work</i>
                                                </span>
                               </div>
                               <div class="select">
                                   <select class="selectpicker" data-style="select-with-transition" title="Service Type" data-size="7" name="service_id">
                                       <option disabled>Choose Service</option>
                                       @foreach($services as $service)
                                           <option value="{{$service->id}}">{{$service->name}}</option>
                                       @endforeach
                                   </select>
                               </div>
                           </div>
                       </div>
                       <div class="form-group">
                           <div class="input-group">
                               <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">date_range</i>
                                                </span>
                               </div>
                               <input type="text" class="form-control"id="datepicker"  name="date" placeholder="Select Date">
                           </div>
                       </div>
                       <div class="form-group">
                           <div class="input-group">
                               <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">timer</i>
                                                </span>
                               </div>
                               <input type="text" class="form-control " id="exampleTime"   name="time">
                           </div>
                       </div>
                   </div>
                   <div class="modal-footer justify-content-center">
                       <button type="submit"  class="btn btn-primary btn-round">Get Token</button>
                   </div>
               </form>
           </div>
       </div>
   </div>
    <!-- Register Modal -->
{{--    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog">--}}
{{--        <div class="modal-dialog modal-signup" role="document">--}}

{{--        </div>--}}
{{--    </div>--}}
    <!--  End Modal -->
@endsection
@section('my-js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>

        $( function() {
            $( "#datepicker" ).datepicker(
            {
                maxDate: new Date(),
                minDate:new Date()
            });
        } );
    </script>
<script>
    $(document).ready(function()
    {
        $('#exampleTime').timepicker({});
    });
    $('#exampleTime').timepicker
    (
        {
            timeFormat: 'h:mm p',
            interval: 60,
            minTime: '10',
            maxTime: '6:00pm',
            defaultTime: '10',
            startTime: '10:00',
            dynamic: false,
            dropdown: true,
            scrollbar: true
        }
    );

</script>

@endsection

