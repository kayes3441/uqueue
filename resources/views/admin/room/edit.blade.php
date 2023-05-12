@extends('master.admin.master')
@section('body')
    <main class="page-content">
        <div class="row">
            <h5 class="text-success text-center">{{Session::get('message')}}</h5>
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Room Form</h6>
                <hr/>
                <h6 class="text-success text-center"></h6>
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">Add Room Info</h5>
                            </div>
                            <hr/>
                            <form action="{{route('update.room',['id'=>$room->id])}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Room Number</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="number" value="{{$room->number}}" id="inputEnterYourName" placeholder="Enter Room Number">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Room Description</label>
                                    <div class="col-sm-9">
                                        <textarea  class="form-control" name="description" id="inputEnterYourName" placeholder="Enter Room Description">{{$room->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Room Assigned By</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="assignedBy"  value="{{$room->assignedBy}}" id="inputEnterYourName" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary px-5">Update Room</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
