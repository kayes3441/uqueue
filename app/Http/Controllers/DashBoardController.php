<?php

namespace App\Http\Controllers;

use App\Models\Confirm;
use App\Models\Counter;
use App\Models\DoneQueue;
use App\Models\Queue;
use App\Models\Service;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard.dashboard',
        [
            'service'=>Service::all(),
            'queue'=>Queue::all(),
            'done_service'=>DoneQueue::all()
        ]);
    }
}
