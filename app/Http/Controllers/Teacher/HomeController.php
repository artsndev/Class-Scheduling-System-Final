<?php

namespace App\Http\Controllers\Teacher;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index(User $user, Request $request)
    {
        return view('teacher.home');
    }

}
