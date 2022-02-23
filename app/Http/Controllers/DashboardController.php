<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index(User $user,Schedule $scheds, Request $request)
    {
        $users = User::find(Auth::user()->id);
        $scheds = Schedule::withTrashed()->where("user_id", "=", Auth::user()->id)->get();
        // dd($user);
        return view('dashboard', compact('scheds', 'users'));
    }
}
