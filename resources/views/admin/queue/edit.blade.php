@extends('master.admin.master')
@section('body')
    <main class="page-content">
        <div class="row">
            <h5 class="text-success text-center">{{Session::get('message')}}</h5>
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Counter Form</h6>
                <hr/>
                <h6 class="text-success text-center"></h6>
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">Add Counter Info</h5>
                            </div>
                            <hr/>
                            <form action="{{route('update.queue',['id'=>$queue->id])}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="status" required>
                                            <option value="" disabled selected> -- Select Queue Status -- </option>
                                            <option value="Active" {{$queue->status == 'Active' ? 'selected' : ''}}> Active </option>
                                            <option value="Hold-On" {{$queue->status == 'Hold-On' ? 'selected' : ''}}> Hold-On </option>
                                            <option value="Done" {{$queue->status == 'Done' ? 'selected' : ''}}> Done </option>
                                            <option value="Cancel" {{$queue->status == 'Cancel' ? 'selected' : ''}}> Cancel </option>
                                        </select>
                                    </div>

                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary px-5">Update Queue Status</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
