<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Schedule;
use App\Exports\SchedulesExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;


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
    public function download()
    {
        return Excel::download(new SchedulesExport, 'users.xlsx');
        // $file = public_path()."\mySchedule.csv";
        // $myfiles = array(
        //     'Content-type: application/csv',
        // );
        // return  FacadeResponse::download($file, "mySchedule.csv" ,$myfiles);
    }
}
