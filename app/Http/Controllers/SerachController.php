<?php

namespace App\Http\Controllers;

use App\Models\Confirm;
use App\Models\Queue;
use Illuminate\Http\Request;

class SerachController extends Controller
{
    public function searchPage(Request $request)
    {
        return view('front.home.search',
            [
                'queues'=>Queue::where('token','=',$request->search)->get(),
    //                'queue'=>Queue::all(),

            ]);
    }
    public function hold(Request $request,$id)
    {
//        return $request->all();
        $queue          = Queue::find($id);
        $queue->status  =$request->status;
        $queue->save();
        return redirect('/');
    }

}
