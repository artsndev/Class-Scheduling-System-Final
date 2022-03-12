<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::find(Auth::user()->id);
        $scheds = Schedule::withTrashed()->where("user_id", "=", Auth::user()->id)->get();
        //dd($notif);
        return view('home', compact('scheds', 'users'));
    }
    public function download(Request $request)
    {
        $file = public_path()."/mySchedule.pdf";
        $headers = array(
            'Content-type: application/pdf',
        );
        return Storage::download($file, "mySchedule.pdf" ,$headers);
    }
}
