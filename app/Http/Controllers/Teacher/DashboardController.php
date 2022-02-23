<?php

namespace App\Http\Controllers\Teacher;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    //
    public function index(User $users, Request $request){
        $users = User::latest()->paginate(10);
        return view('teacher.dashboard', compact('users'));
    }
    public function store(int $id, Request $request){
        // $request->validate([
        //     'admin_id' =>'required|string',
        //     'user_id'=>'required|string',
        //     'proffessor'=>'required|string',
        //     'department'=>'required|string|max:255',
        //     'semester'=>'required|string|max:255',
        //     'curriculum_year'=>'required|string|max:255',
        //     'student_type'=>'required|string|max:255',
        //     'student_status'=>'required|string',
        //     'civil_status'=>'required|string',
        //     'subjects'=>'required|string|max:255',
        //     'units'=>'required|string',
        //     'age'=>'required|string|max:255',
        //     'days'=>'required|string|max:255',
        //     'time'=>'required|string',
        //     'section'=>'required|string',
        //     'room'=>'required|string',
        // ]);
        $user= User::find($id);
        $sched = Schedule::create([
            'teacher_id' => Auth::user()->id,
            'user_id' => $user->id,
            'proffessor' => $request['proffessor'],
            'department' => $request['department'],
            'semester' => $request['semester'],
            'curriculum_year' => $request['curriculum_year'],
            'student_type' => $request['student_type'],
            'student_status' =>$request['student_status'],
            'civil_status' => $request['civil_status'],
            'subjects' => $request['subjects'],
            'age' => $request['age'],
            'units' => $request['units'],
            'days' => $request['days'],
            'time' =>$request['time'],
            'section' => $request['section'],
            'room' => $request['room'],
        ]);
        // dd($sched);
        Alert::toast('You\'ve Successfully Uploaded!', 'success');
        return back();
    }
    public function update(int $id, Schedule $sched, Request $request)
    {
        // $request->validate([
        //     'admin_id' =>'required|string',
        //     'user_id'=>'required|string',
        //     'proffessor'=>'required|string',
        //     'department'=>'required|string|max:255',
        //     'semester'=>'required|string|max:255',
        //     'curriculum_year'=>'required|string|max:255',
        //     'student_type'=>'required|string|max:255',
        //     'student_status'=>'required|string',
        //     'civil_status'=>'required|string',
        //     'subjects'=>'required|string|max:255',
        //     'units'=>'required|string',
        //     'age'=>'required|string|max:255',
        //     'days'=>'required|string|max:255',
        //     'time'=>'required|string',
        //     'section'=>'required|string',
        //     'room'=>'required|string',
        // ]);
        $sched = Schedule::find($id);
        $sched->proffessor = $request['proffessor'];
        $sched->department = $request['department'];
        $sched->semester = $request['semester'];
        $sched->curriculum_year = $request['curriculum_year'];
        $sched->student_type = $request['student_type'];
        $sched->student_status = $request['student_status'];
        $sched->civil_status = $request['civil_status'];
        $sched->subjects = $request['subjects'];
        $sched->units = $request['units'];
        $sched->age = $request['age'];
        $sched->days = $request['days'];
        $sched->time = $request['time'];
        $sched->section = $request['section'];
        $sched->room = $request['room'];
        //dd($sched);
        Alert::toast('Schedule Updated Successfully!', 'success');
        return back();
    }
}
