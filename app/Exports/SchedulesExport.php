<?php

namespace App\Exports;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SchedulesExport implements FromView, ShouldAutoSize
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        // $scheds = Schedule::withTrashed()->where("user_id", "=", Auth::user()->id)->get();
        // return view('dashboard', compact('scheds'));
        //return Schedule::withTrashed()->where("user_id", "=", Auth::user()->id)->get();
        return view('dashboard', [
            'users' => User::find(Auth::user()->id),
            'scheds' => Schedule::withTrashed()->where("user_id", "=", Auth::user()->id)->get()
        ]);
    }
}
