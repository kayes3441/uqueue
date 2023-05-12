<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    private $room;
    public function addRoom()
    {
        return view('admin.room.add');
    }
    public function newRoom(Request $request)
    {
        Room::roomNew($request);
        return redirect()->back()->with('message','Counter Info Add Successfully');
    }

    public function manageRoom()
    {
        return view('admin.room.manage',
            [
                'rooms'=>Room::orderBy('id','desc')->get()
            ]);
    }
    public function editRoom($id)
    {
        return view('admin.room.edit',
            [
                'room'=>Room::find($id)
            ]);
    }
    public function updateRoom(Request $request,$id)
    {
        Room::roomUpdate($request,$id);
        return redirect('/manage-room')->with('message','Counter Info Update Successfully');
    }
    public function deleteRoom($id)
    {
        $this->room=Room::find($id);
        $this->room->delete();
        return redirect('/manage-room')->with('message','Counter Info Delete Successfully');
    }
}
