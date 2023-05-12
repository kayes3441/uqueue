@extends('master.admin.master')

@section('body')


    <main class="page-content">
        <!--breadcrumb-->
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">DataTable Example</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered  align-middle mb-0 text-center" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Number</th>
                            <th>Description</th>
                            <th>Assigned By</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rooms as $room)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$room->number}}</td>
                            <td>{{$room->description}}</td>
                            <td>{{$room->assignedBy}}</td>
                            <td>{{$room->status ==1 ?'Open' : 'Close'}}</td>
                            <td><a href="{{route('edit.room',['id'=>$room->id])}}" class="btn-success btn-sm mx-1" title="Edit">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <a href="{{route('delete.room',['id'=>$room->id])}}" class="btn-danger btn-sm" title="Delete">
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

