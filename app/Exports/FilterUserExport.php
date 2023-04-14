<?php

namespace App\Exports;

use App\Models\Employee;
use Modules\User\Entities\User;
use App\Exports\FilterUserExport;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use App\Http\Controllers\EmployeeController;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class FilterUserExport implements FromView, ShouldAutoSize, WithEvents
{
    /**
     * @return View
     */
    public function view(): View
    {
        $data = app(Employee::class)->newQuery();

        if ( request()->has('search') && !empty(request()->get('search')) ) {
            $search = request()->query('search');
            $data->where(function ($query) use($search) {
                $query->where('nama', 'LIKE', "%{$search}%")
                    ->orWhere('provinsi', 'LIKE', "%{$search}%")
                    ->orWhere('kota', 'LIKE', "%{$search}%");
            });
        }
       return Employee::all();
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->setRightToLeft(true);
            },
        ];
    }
}

