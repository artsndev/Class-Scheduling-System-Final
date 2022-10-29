<?php

namespace App\Http\Controllers\Teacher;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Teacher;

class HomeController extends Controller
{
    //
    public function index(User $user, Request $request)
    {
        return view('teacher.home',);
    }
}
