<?php

namespace App\Exports;

use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class AdminScheduleExport implements FromView, ShouldAutoSize
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }
    public function view(): View
    {
        $sched= Schedule::all();
        return view('dashboard', [
            'scheds' => Schedule::with('user')->where("user_id", "=", $sched->user_id)->get()
        ]);
    }
}
