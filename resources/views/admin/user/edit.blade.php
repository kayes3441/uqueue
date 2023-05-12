@extends('master.admin.master')
@section('body')
    <main class="page-content">
        <div class="row">
            <h5 class="text-success text-center">{{Session::get('message')}}</h5>
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">User Form</h6>
                <hr/>
                <h6 class="text-success text-center"></h6>
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">Update General User </h5>
                            </div>
                            <hr/>
                            <form action="{{route('update.user',['id'=>$user->id])}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">User Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" id="inputEnterYourName" value="{{$user->name}}" placeholder="Enter User Name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">User Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email" id="inputEnterYourName" value="{{$user->email}}" placeholder="Enter User Email">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">User Mobile Number</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="mobile" id="inputEnterYourName" value="{{$user->mobile}}" placeholder="Enter User Mobile Number">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="password" id="inputEnterYourName" value="{{$user->key}}" placeholder="Password">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary px-5">Update User</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
