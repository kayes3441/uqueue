<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    private static $service;

    public static function saveBasicInfo($service,$request)
    {
        $service->room_id       =$request->room_id;
        $service->name       =$request->name;
        $service->description=$request->description;
        $service->save();
        return $service;
    }

    public static function serviceNew($request)
    {
        self::$service =new Service();
        return Service::saveBasicInfo(self::$service,$request);
    }

    public static function serviceUpdate($request,$id)
    {
        self::$service =Service::find($id);
        Service::saveBasicInfo(self::$service,$request);
    }

    public function room()
    {
        return $this->belongsTo('App\Models\Room');
    }

}
