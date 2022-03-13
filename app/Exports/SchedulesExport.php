<?php

namespace App\Exports;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;

class SchedulesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Schedule::withTrashed()->where("user_id", "=", Auth::user()->id)->get();
    }
}
