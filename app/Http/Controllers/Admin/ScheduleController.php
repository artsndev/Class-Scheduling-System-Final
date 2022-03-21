<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Teacher;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Exports\SchedulesExport;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;


class ScheduleController extends Controller
{
    public function index(){
        $users= User::with('studentSched')->latest()->paginate(10);
        // dd($users);
        return view('admin.schedule', compact('users'));
    }
    public function downloadSched(int $id)
    {
        return Excel::download(new SchedulesExport($id), 'sched.xlsx');
    }
}
