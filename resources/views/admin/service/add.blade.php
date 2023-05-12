@extends('master.admin.master')
@section('body')
    <main class="page-content">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Service Form</h6>
                <hr/>
                <h6 class="text-success text-center">{{Session::get('message')}}</h6>
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">Add Service Info</h5>
                            </div>
                            <hr/>
                            <form action="{{route('new.service')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Select Counter</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="room_id" >
                                            <option disabled selected> -- Select Counter Number -- </option>
                                            @foreach($rooms as $room)
                                            <option value="{{$room->id}}">{{$room->number}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Service Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" id="inputEnterYourName" placeholder="Enter Service Name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Service Description</label>
                                    <div class="col-sm-9">
                                        <textarea  class="form-control" name="description" id="inputEnterYourName" placeholder="Enter Service Description"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary px-5">Create Service</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
