<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Teacher;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class StudentProfileSchedule extends Controller
{
    //
    public function index(int $id, User $user,Request $request)
    {
        $teachers = Teacher::all();
        $user = User::find($id);
        $scheds= Schedule::with('user')->where("user_id", "=", $user->id)->get();
        // dd($scheds);
        return view('admin.studentSched', compact('scheds', 'user', 'teachers'));
    }
    public function update(int $id, Schedule $sched,Request $request)
    {
        $request->validate([
            'proffessor'=>'string|max:255|nullable',
            'subjects'=>'string|max:255|nullable',
            'units'=>'string|nullable',
            'days'=>'string|max:255|distinct|nullable',
            'timeStart'=>'string|distinct|nullable',
            'timeEnd'=>'string|distinct|nullable',
            'room'=>'string|nullable',
        ]);
        $sched = Schedule::find($id);
        $sched->subjects = $request['subjects'];
        $sched->units = $request['units'];
        $sched->room = $request['room'];
        $sched->days = $request['days'];
        $sched->timeStart = $request['timeStart'];
        $sched->timeEnd = $request['timeEnd'];
        $sched->proffessor = $request['proffessor'];
        $sched->save();
        Alert::toast('Updated Successfully!', 'success');
        return back();
        // dd($sched);
    }
}
