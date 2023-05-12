<?php

namespace App\Http\Controllers;

use App\Models\CancelQueue;
use App\Models\DoneQueue;
use App\Models\Queue;
use Illuminate\Http\Request;

class GeneralDashboardController extends Controller
{
    public function dashboard()
    {
        return view('generalUser.dashboard.dashboard',
        [
            'queue'=>Queue::all(),
            'id'=>Queue::first()->id
        ]);
    }
    public function startServe(Request $request)
    {
        $nextQue = Queue::where('id','=', $request->id)->first();
        if (isset($nextQue)){
            return view('generalUser.dashboard.serve',
                [
                    'nextQue'=>$nextQue,
                ]);
        }else{
            return 'QueFinished';
        }
    }
    public function serve(Request $request)
    {
        $nextQue = Queue::where('id','>', $request->id)->first();
         if (isset($nextQue)){
             return view('generalUser.dashboard.serve',
                 [
                     'nextQue'=>$nextQue,
                 ]);
         }else{
             return 'QueFinished';
         }
    }

    public function updateServe(Request $request)
    {
        $nextQue = Queue::where('id','=', $request->id)->first();
        $nextQue->status =$request->status;
        $nextQue->save();
        if ($nextQue->status=='Done')
        {
            $done_queue             =new DoneQueue();
            $done_queue->name       =$nextQue->name;
            $done_queue->email      =$nextQue->email;
            $done_queue->token      =$nextQue->token;
            $done_queue->service_id =$nextQue->service_id;
            $done_queue->date       =$nextQue->date;
            $done_queue->time       =$nextQue->time;
            $done_queue->save();

            Queue::find($request->id)->delete();
            $nextQue = Queue::where('id','>', $request->id)->first();
            if (isset($nextQue)){
                return view('generalUser.dashboard.serve',
                    [
                        'nextQue'=>$nextQue,
                    ]);
            }else{
                return redirect('/general-dashboard');
            }
        }
        if ($nextQue->status=='Cancel')
        {
            $cancel_queue             =new CancelQueue();
            $cancel_queue->name       =$nextQue->name;
            $cancel_queue->email      =$nextQue->email;
            $cancel_queue->service_id =$nextQue->service_id;
            $cancel_queue->date       =$nextQue->date;
            $cancel_queue->time       =$nextQue->time;
            $cancel_queue->save();
        }
        $nextQue = Queue::where('id','>', $request->id)->first();
        if (isset($nextQue)){
            return view('generalUser.dashboard.serve',
                [
                    'nextQue'=>$nextQue,
                ]);
        }else{
            return redirect('/general-dashboard');
        }
    }
}
