<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    private $counter;
    public function addCounter()
    {
        return view('admin.counter.add');
    }

    public function newCounter(Request $request)
    {
        Counter::counterNew($request);
        return redirect()->back()->with('message','Counter Info Add Successfully');
    }

    public function manageCounter()
    {
        return view('admin.counter.manage',
        [
            'counters'=>Counter::orderBy('id','desc')->get()
        ]);
    }
    public function editCounter($id)
    {
        return view('admin.counter.edit',
        [
            'counter'=>Counter::find($id)
        ]);
    }
    public function updateCounter(Request $request,$id)
    {
        Counter::counterUpdate($request,$id);
        return redirect('/manage-counter')->with('message','Counter Info Update Successfully');
    }
    public function deleteCounter($id)
    {
        $this->counter=Counter::find($id);
        $this->counter->delete();
        return redirect('/manage-counter')->with('message','Counter Info Delete Successfully');
    }
}
