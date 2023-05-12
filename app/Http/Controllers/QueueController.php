<?php

namespace App\Http\Controllers;

use App\Models\CancelQueue;
use App\Models\DoneQueue;
use App\Models\Queue;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    public function allQueue()
    {
        return view('admin.queue.all',
        [
            'queues'=>Queue::orderBy('id','desc')->get()
        ]);
    }
    public function edit(Request $request,$id)
    {
        return view('admin.queue.edit',
        [
            'queue'=>Queue::find($id)
        ]);
    }
    public function update(Request $request)
    {
        $queue=Queue::find($request->id);
        $queue->status =$request->status;
        $queue->save();

        if ($queue->status=='Done')
        {
            $done_queue             =new DoneQueue();
            $done_queue->name       =$queue->name;
            $done_queue->email      =$queue->email;
            $done_queue->token      =$queue->token;
            $done_queue->service_id =$queue->service_id;
            $done_queue->date       =$queue->date;
            $done_queue->time       =$queue->time;
            $done_queue->time_date  =$queue->time_date;
            $done_queue->save();

            Queue::find($request->id)->delete();
            return redirect('/all-queue')->with('message','Service Completed');
        }
        if ($queue->status=='Cancel')
        {
            $cancel_queue            =new CancelQueue();
            $cancel_queue->name       =$queue->name;
            $cancel_queue->email      =$queue->email;
            $cancel_queue->service_id =$queue->service_id;
            $cancel_queue->date       =$queue->date;
            $cancel_queue->time       =$queue->time;
            $cancel_queue->time_date  =$queue->time_date;
            $cancel_queue->save();

            Queue::find($request->id)->delete();
        }
        return redirect('/all-queue')->with('message','Queue status Update Successfully');
    }

    public function delete($id)
    {
        Queue::find($id)->delete();
        return redirect('/all-queue')->with('message','Queue status Update Successfully');
    }
}
