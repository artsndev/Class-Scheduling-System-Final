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
}
