@extends('master.admin.master')

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
                            <th>Date & Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reports as $report)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$report->name}}</td>
                                <td>{{$report->email}}</td>
                                <td>{{$report->service->name}}</td>
                                <td>{{$report->date}} At {{$report->time}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection

