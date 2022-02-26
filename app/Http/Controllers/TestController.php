<?php

namespace App\Http\Controllers;

use App\Events\MessageNotice;
use Illuminate\Http\Request;
use App\Models\RealTimeNotice;

class TestController extends Controller
{
    public function index(){
        return view('app');
    }
    public function addNotice(Request $req){
        // return response()->json([
        //     'msg' => 'some error occured!'
        // ], 422);
        $notify = RealTimeNotice::create([
            'messages' => $req->msg
        ]);
        event(new MessageNotice($notify));

        return $notify;
    }
    public function getNotice(){
        // return RealTimeNotice::orderBy('id', 'desc')->latest()->get();
        return RealTimeNotice::orderBy('id', 'desc')->get();
    }
}
