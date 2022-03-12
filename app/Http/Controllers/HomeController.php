<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
        $users = [];

        if (($open = fopen(public_path() . "/mySchedule.csv", "r")) !== FALSE) {

            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
                $users[] = $data;
            }

            fclose($open);
        }

        echo "<pre>";
        print_r($users);
    }
        // $file = public_path()."\mySchedule.csv";
        // $myfiles = array(
        //     'Content-type: application/csv',
        // );
        // return  FacadeResponse::download($file, "mySchedule.csv" ,$myfiles);
}
