<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;

    private static $counter;

    public static function saveBasicInfo($counter,$request)
    {
        $counter->number =$request->number;
        $counter->description=$request->description;
        $counter->assignedBy =$request->assignedBy;
        $counter->save();
        return $counter;
    }

    public static function counterNew($request)
    {
        self::$counter =new Counter();
        return Counter::saveBasicInfo(self::$counter,$request);
    }

    public static function counterUpdate($request,$id)
    {
        self::$counter =Counter::find($id);
        Counter::saveBasicInfo(self::$counter,$request);
    }

}
