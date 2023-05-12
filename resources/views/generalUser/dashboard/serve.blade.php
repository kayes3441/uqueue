

@extends('master.generalUser.master')
@section('title')
    Serve
@endsection
@section('body')

    <main class="page-content">
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <h6 class="mb-0 text-uppercase">Basic Form</h6>
                            <hr/>
                            <form action="{{ route('serve') }}" method="get" class="row g-3">
                                @csrf
                                <div class="col-12">
                                    <input type="hidden" class="form-control" name="id" value="{{$nextQue->id}}" readonly>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Serial</label>
                                    <input type="text" class="form-control" value="{{$nextQue->serial}}" readonly>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" value="{{$nextQue->name}}" readonly>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Token</label>
                                    <input type="text" class="form-control" value="{{$nextQue->token}}" readonly>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Room Number</label>
                                    <input type="text" class="form-control" value="{{$nextQue->service->room->number}}" readonly>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Next</button>
                                    </div>
                                </div>
                            </form>
                            <form action="{{route('update.serve',['id'=>$nextQue->id])}}" method="post">
                                @csrf
                            <div class="col-12 mb-4">
                                <label class="form-label">Status</label>
                                <select class="form-control" name="status" required >
                                    <option value="" disabled selected> -- Select Queue Status -- </option>
                                    <option value="Active" {{$nextQue->status == 'Active' ? 'selected' : ''}}>Active </option>
                                    <option value="Hold-On" {{$nextQue->status == 'Hold-On' ? 'selected' : ''}}> Hold-On </option>
                                    <option value="Done" {{$nextQue->status == 'Done' ? 'selected' : ''}}> Done </option>
                                    <option value="Cancel" {{$nextQue->status == 'Cancel' ? 'selected' : ''}}> Cancel </option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

