<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Exports\SchedulesExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;
use Illuminate\Auth\Access\Response as FacadeResponse;


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
        return view('home', compact('scheds', 'users'));
    }
    public function download()
    {
        // return Excel::download(new SchedulesExport, 'mySched.xlsx');
        $file = public_path()."\mySchedule.csv";
        $myfiles = array(
            'Content-type: application/csv',
        );
        return  FacadeResponse::download($file, "mySchedule.csv" ,$myfiles);
    }
}
