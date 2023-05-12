<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoneQueue extends Model
{
    use HasFactory;
    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
}
