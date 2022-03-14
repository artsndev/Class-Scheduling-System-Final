<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Exports\SchedulesExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
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
        $scheds = Schedule::where("user_id", "=", Auth::user()->id)->get();
        return view('home',  [ 'scheds'=> Schedule::paginate(6)]);
    }
    public function download(int $id)
    {
        $scheds = Schedule::where("id", "=", $id)->get();
        // dd($scheds);
        return Excel::download(new SchedulesExport($id), 'mySched.xlsx');
    }
}
