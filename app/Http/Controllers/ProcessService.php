<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProcessService extends Controller
{
    public function start() {
        $response = json_decode(Http::get(env('BACKEND_URI').'/thesis'));
        return view('dashboard', ['theses'=>$response]);
    }

    public function students(){
        $response = json_decode(Http::get(env('BACKEND_URI').'/students'));
        return view('students', ['students'=>$response]);
    }

    public function notifications(){
        $response = json_decode(Http::get(env('BACKEND_URI').'/notification'));
        return view('notifications', ['notifications'=>$response]);
    }

    public function submitForm(Request $request){
        $responseFeedback = json_decode(Http::post(env('BACKEND_URI').'/feedback/add', ['thesisId' => $request->id, 'feedback'=>$request->content]));
        $responseNotification = json_decode(Http::post(env('BACKEND_URI').'/notification/add', ['notification' => 'Feedback for id '.$request->id.' has been added '.Carbon::now()]));
        return redirect('/');
    }
}
