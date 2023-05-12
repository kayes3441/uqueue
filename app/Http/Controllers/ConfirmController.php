<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmMail;
use App\Models\Queue;
use App\Models\Service;
use Illuminate\Http\Request;
use Session;
use Str;
use Mail;
class ConfirmController extends Controller
{
    private $confirm;
    private $data;
    public function tokenConfirm(Request $request)
    {
       if($request->validate([
            'email'=>'required|unique:queues',

        ],
        ))
        Session::put('name',$request->name);
        Session::put('email',$request->email);
        Session::put('service',$request->service_id);
        Session::put('date',$request->date);
        Session::put('time',$request->time);

        return view('front.home.token-confirm',
            [
                'service'=>Service::find(Session::get('service'))
            ]);
    }

    public function index(Request $request)
    {
        $allQueue=Queue::all()->count();
        if($allQueue==0)
        {
            $count =0;
            $this->confirm              =new Queue();
            $this->confirm->name        = Session::get('name');
            $this->confirm->email       = Session::get('email');
            $this->confirm->service_id  = Session::get('service');
            $this->confirm->date        = Session::get('date');
            $this->confirm->time        = Session::get('time');
            $this->confirm->token       = Str::random(5);
            $this->confirm->serial      = $count+1;
            $this->confirm->save();
        }
        else
        {
            $count=Queue::latest()->first()->serial;
            $this->confirm              =new Queue();
            $this->confirm->name        = Session::get('name');
            $this->confirm->email       = Session::get('email');
            $this->confirm->service_id  = Session::get('service');
            $this->confirm->date        = Session::get('date');
            $this->confirm->time        = Session::get('time');
            $this->confirm->token       = Str::random(5);
            $this->confirm->serial      = $count+1;
            $this->confirm->save();
        }



        $queue=Queue::find($this->confirm->id);
        $this->data = [
            'title'     => 'Confirmation mail',
            'name'      =>  $queue->name,
            'service'   =>  $queue->service->name,
            'room'       =>  $queue->service->room->number,
            'serial'    =>  $queue->id,
            'date'      =>  $queue->date,
            'time'      =>  $queue->time,
            'token'     =>  $queue->token,
        ];
        Mail::to(Session::get('email'))->send(new ConfirmMail($this->data));
        return view('front.home.token',
        [
            'queue'=>Queue::find($this->confirm->id)
        ]);
    }
}
