<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ScheduleController extends Controller
{
    public function index(){
        $users= User::with('studentSched')->latest()->paginate(10);
        // dd($users);
        return view('admin.schedule', compact('users'));
    }
    public function update(int $id, User $users,Request $request)
    {
        $users = User::find($id);
        // $scheds = Schedule::find($users->id);
        foreach ($request->scheds as $sched) {
            Schedule::update([
                'id' => $sched->id,
                ],[
                // 'proffessor' => $sched->proffessor,
                'subjects' => $sched->subjects,
                'units' => $sched->units,
                'days' => $sched->days,
                'time' => $sched->time,
                'room' => $sched->room,
            ]);
            dd($sched);
        }
        // dd($sched);
        // Alert::toast('You\'ve Successfully Uploaded!', 'success');
        // return back();
    }
}
