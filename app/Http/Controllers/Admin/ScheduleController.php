<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ScheduleController extends Controller
{
    //
    public function index(){
        $users= User::latest()->paginate(10);
        $scheds = Schedule::latest()->paginate(10);
        return view('admin.schedule', compact('users','scheds'));
    }
}
