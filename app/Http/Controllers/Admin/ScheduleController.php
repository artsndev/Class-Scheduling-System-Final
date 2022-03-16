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
        $sched = Schedule::find($users->id);
        $sched->save([
            $sched->proffessor = $request['proffessor'],
            $sched->subjects = $request['lastname'],
            $sched->units = $request['units'],
            $sched->days = $request['days'],
            $sched->time = $request['time'],
            $sched->room = $request['room'],
        ]);
        dd($sched);
        // Alert::toast('You\'ve Successfully Uploaded!', 'success');
        // return back();
    }
}
