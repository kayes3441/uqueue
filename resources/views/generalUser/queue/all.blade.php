@extends('master.generalUser.master')
@section('my-css')
    <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" />
@endsection
@section('body')
    <main class="page-content">
        <h6 class="mb-0 text-uppercase">DataTable Example</h6>
        <hr/>
        <h6 class="text-center text-success">{{Session::get('message')}}</h6>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Service</th>
                            <th>Room Number</th>
                            <th>Token</th>
                            <th>Status</th>
                            <th>Date & Time</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($queues as $queue)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$queue->name}}</td>
                                <td>{{$queue->email}}</td>
                                <td>{{$queue->service->name}}</td>
                                <td>{{$queue->service->room->number}}</td>
                                <td>{{$queue->token}}</td>
                                <td>{{$queue->status }}</td>
                                <td>{{$queue->date}} At {{$queue->time}}</td>
                                <td><a href="{{route('general.edit.queue',['id'=>$queue->id])}}" class="btn-success btn-sm mx-1 {{$queue->status =='Done' ? 'disabled' : ''}}" title="Edit">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                    <a href="{{route('general.delete.queue',['id'=>$queue->id])}}" class="btn-danger btn-sm {{$queue->status =='Cancel' ? '' : 'disabled'}}" title="Delete">
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

@section('my-js')
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#example').DataTable();
        } );
    </script>
@endsection
