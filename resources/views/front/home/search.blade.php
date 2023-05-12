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
    <div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url({{asset('/')}}front/assets/img/bg0.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand">
                        <h1>
                            U-Queue
                        </h1>
                        <h3 class="title">Online Queue Management </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="section section-basic">
            <div class="container">
                @foreach($queues as $queue)
                <div class="bg-rose text-center text-uppercase text-primary">

                    <h5><b>Name: {{$queue->name}} </b></h5><br>
                    <h5><b>Serial No:{{$queue->serial}} </b></h5><br>
                    <h5><b>Service: {{$queue->service->name}} </b></h5><br>
                    <h5><b>Room Number: {{$queue->service->room->number}} </b></h5><br>
                    <h5><b>Token: {{$queue->token}} </b></h5><br>
                    <h5><b>Date & Time: {{$queue->date}} at {{$queue->time}} </b></h5><br>
                    <h5><b>Status:{{$queue->status}} </b></h5><br>

                </div>
                <form action="{{route('hold.on',['id'=>$queue->id])}}" method="post">
                    @csrf
                <div class="text-center ">
                    @if($queue->status=='Active')
                        <input type="hidden" name="status" value="Hold-On">
                        <button type="submit" class="btn btn-primary" id="holdOn"> Hold-On</button>

                    @else
                        <input type="hidden" name="status" value="Active">
                        <button type="submit" class="btn btn-primary" id="active">Active</button>
                    @endif
                </div>
                </form>
                @endforeach
            </div>
            <div class="container">
                <div class="bg-rose text-center text-uppercase text-primary">
                    @if(sizeof($queues) == 0)
                        <h5><b>No result found for this token</b></h5><br>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
<script>

</script>
