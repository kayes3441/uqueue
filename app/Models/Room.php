<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    private static $room;

    public static function saveBasicInfo($room,$request)
    {
        $room->number       =$request->number;
        $room->description  =$request->description;
        $room->assignedBy   = $request->assignedBy;
        $room->save();
        return $room;
    }

    public static function roomNew($request)
    {
        self::$room =new Room();
        return Counter::saveBasicInfo(self::$room,$request);
    }

    public static function roomUpdate($request,$id)
    {
        self::$room =Room::find($id);
        Counter::saveBasicInfo(self::$room,$request);
    }
}
