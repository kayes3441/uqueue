@extends('master.generalUser.master')
@section('title')
    Dashboard
@endsection
@section('body')
    <main class="page-content">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="my-1">{{count($queue)}}</h4>
                            </div>
                            <div class="widget-icon-large bg-gradient-danger text-white ms-auto"><i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="col-12">
                                <form action="{{route('start.serve',['id'=>$id])}}" method="post">
                                    @csrf
                                    <p class="mb-0 text-secondary">Start Serving</p>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Start</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->

    </main>



@endsection
