<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $service;
    public function addService()
    {
        return view('admin.service.add',
        [
            'rooms'=>Room::all()
        ]);
    }
    public function newService(Request $request)
    {
        Service::serviceNew($request);
        return redirect()->back()->with('message','Service Info Add Successfully');
    }

    public function manageService()
    {
        return view('admin.service.manage',
        [
            'services'=>Service::all()
        ]);
    }

    public function editService($id)
    {
        return view('admin.service.edit',
            [
                'service'=>Service::find($id),
                'rooms'=>Room::all()
            ]);
    }

    public function updateService(Request $request,$id)
    {
        Service::serviceUpdate($request,$id);
        return redirect('/manage-service')->with('message','Service Info Update Successfully');
    }
    public function deleteService($id)
    {
        $this->service=Service::find($id);
        $this->service->delete();
        return redirect('/manage-service')->with('message','Service Info Delete Successfully');
    }
}
