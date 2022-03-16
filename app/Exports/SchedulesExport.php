<?php

namespace App\Exports;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class SchedulesExport implements FromView, ShouldAutoSize
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
        // return Schedule::with('user')->where("id", "=", $this->id)->get();
        return view('dashboard', [
            'scheds' => Schedule::with('user')->where("user_id", "=", Auth::user()->id)->get()
        ]);
    }
    // public function map($sched): array
    // {
    //     return [
    //         $sched->id,
    //         $sched->user->firstname,
    //         $sched->user->lastname,
    //         $sched->subjects,
    //         $sched->units,
    //         $sched->days,
    //         $sched->time,
    //         $sched->room,
    //     ];
    // }
    // public function headings(): array
    // {
    //     return [
    //         'Id',
    //         'Given Name',
    //         'Last Name',
    //         'Subjects',
    //         'Units',
    //         'Days',
    //         'Time',
    //         'Room',
    //     ];
    // }
    // public function registerEvents(): array
    // {
    //     return [
    //         AfterSheet::class => function(AfterSheet $event){
    //             $event->sheet->getStyle('A1:H1')->applyFromArray([
    //                 'font' => [
    //                     'bold' => true
    //                 ],
    //                 'borders' => [
    //                     'outline' => [
    //                         'color' => ['argb' => 'FFFF0000'],
    //                     ],
    //                 ]
    //             ]);
    //         }
    //     ];
    // }
}
