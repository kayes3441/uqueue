<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    use HasFactory;
    public function counter()
    {
        return $this->belongsTo('App\Models\Counter');
    }
    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
}
