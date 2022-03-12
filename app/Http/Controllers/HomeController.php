<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel as Excels;
use Illuminate\Support\Facades\Response as FacadeResponse;

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
        $file = public_path()."\mySchedule.csv";
        $myfiles = array(
            'Content-type: application/csv',
        );
        return  FacadeResponse::download($file, "mySchedule.csv" ,$myfiles);
    }
}
