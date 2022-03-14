<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    //
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user)
    {
        return view('admin.home', ['users'=> User::paginate(2)]);
    }
    public function destroy(int $id)
    {
        $user= User::find($id);
        //dd($user);
        $user->delete();
        return back();
    }
    public function updateUser(int $id,User $user,Request $request,)
    {
        $request->validate([
            'lastname' =>'required|string',
            'firstname' =>'required|string',
            'middlename' =>'required|string',
            'studentId' =>'required|string',
            'age' =>'required|string',
            'email'=>'required|email|string|max:255',
            'phone' =>'required|string',
            'address' =>'required|string',
            'birth_date' =>'required|string',
        ]);
        $user = User::find($id);
        $user->lastname = $request['lastname'];
        $user->firstname = $request['firstname'];
        $user->middlename = $request['middlename'];
        $user->studentId = $request['studentId'];
        $user->age = $request['age'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->address = $request['address'];
        $user->birth_date = $request['birth_date'];
        $user->save();
        // dd($user);
        Alert::toast('Updated Successfully!', 'success');
        return back();
    }
    public function stores(int $id, Request $request){
        $request->validate([
            'subjects'=>'required|string|max:255',
            'units'=>'required|string',
            'days'=>'required|string|max:255',
            'time'=>'required|string',
            'room'=>'required|string',
        ]);
        $user= User::find($id);
        $sched = Schedule::create([
            'admin_id' => Auth::user()->id,
            'user_id' => $user->id,
            'subjects' => $request['subjects'],
            'units' => $request['units'],
            'days' => $request['days'],
            'time' =>$request['time'],
            'room' => $request['room'],
        ]);
        // dd($sched);
        Alert::toast('You\'ve Successfully Uploaded!', 'success');
        return back();
    }
    // public function updateSched(int $id, Schedule $sched, Request $request)
    // {
    //     $request->validate([
    //         'proffessor'=>'required|string',
    //         'subjects'=>'required|string|max:255',
    //         'units'=>'required|string',
    //         'age'=>'required|string|max:255',
    //         'days'=>'required|string|max:255',
    //         'time'=>'required|string',
    //         'room'=>'required|string',
    //     ]);
    //     $sched = Schedule::find($id);
    //     $sched->subjects = $request['subjects'];
    //     $sched->units = $request['units'];
    //     $sched->age = $request['age'];
    //     $sched->days = $request['days'];
    //     $sched->time = $request['time'];
    //     $sched->section = $request['section'];
    //     $sched->room = $request['room'];
    //     //dd($sched);
    //     Alert::toast('Schedule Updated Successfully!', 'success');
    //     return back();
    // }
}
