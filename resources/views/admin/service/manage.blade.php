@extends('master.admin.master')

@section('body')
    <main class="page-content">
        <!--breadcrumb-->
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">DataTable Example</h6>
        <hr/>
        <h6 class="text-success text-center">{{Session::get('message')}}</h6>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered  align-middle mb-0 text-center" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Room Number</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$service->name}}</td>
                                <td>{{$service->room->number}}</td>
                                <td>{{$service->description}}</td>
                                <td>{{$service->status ==1 ?'Published':'Unpublished'}}</td>
                                <td><a href="{{route('edit.service',['id'=>$service->id])}}" class="btn-success btn-sm mx-1" title="Edit">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                    <a href="{{route('delete.service',['id'=>$service->id])}}" class="btn-danger btn-sm" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection

