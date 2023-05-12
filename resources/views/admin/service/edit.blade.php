@extends('master.admin.master')
@section('body')
    <main class="page-content">
        <div class="row">
            <h5 class="text-success text-center">{{Session::get('message')}}</h5>
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Service Form</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">Update Service Info</h5>
                            </div>
                            <hr/>
                            <form action="{{route('update.service',['id'=>$service->id])}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Select Counter</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="room_id" >
                                            <option disabled selected> -- Select Counter Number -- </option>
                                            @foreach($rooms as $room)
                                                <option value="{{$room->id}}"{{$room->id == $service->counter_id ? 'Selected' :''}}>{{$room->number}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Service Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" value="{{$service->name}}" id="inputEnterYourName" placeholder="Enter Counter Number">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Service Description</label>
                                    <div class="col-sm-9">
                                        <textarea  class="form-control" name="description" id="inputEnterYourName" placeholder="Enter Counter Description">{{$service->description}}</textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary px-5">Update Service</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
