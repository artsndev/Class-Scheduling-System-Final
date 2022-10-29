<?php

namespace App\Http\Controllers\Teacher;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    //
    public function index(User $users, Request $request)
    {
        $users = User::latest()->paginate(10);
        $teachers = Teacher::latest()->paginate(10);
        return view('teacher.dashboard', compact('users', 'teachers'),);
    }
    public function stores(int $id, User $user, Request $request)
    {
        $request->validate([
            'sched.*.proffessor' => 'string|max:255|nullable',
            'sched.*.subjects' => 'string|max:255|nullable',
            'sched.*.units' => 'string|nullable',
            'sched.*.days' => 'string|max:255|distinct|nullable',
            'sched.*.timeStart' => 'string|distinct|nullable',
            'sched.*.timeEnd' => 'string|distinct|nullable',
            'sched.*.room' => 'string|nullable',
        ]);
        $user = User::find($id);
        foreach ($request->sched as $schedInput) {
            $scheds = $schedInput + ['teacher_id' => Auth::user()->id, 'user_id' => $user->id];
            Schedule::create($scheds);
        }
        // dd($scheds);
        Alert::toast('You\'ve Successfully Uploaded!', 'success');
        return back();
    }
}
