<?php

namespace App\Http\Controllers;

use App\Models\DoneQueue;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {
        return view('admin.report.report',
        [
            'reports'=> DoneQueue::orderBy('id','desc')->get(),
        ]);
    }
}
