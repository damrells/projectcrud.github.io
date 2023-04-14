<?php

namespace App\Exports;

use App\Models\Employee;

use Maatwebsite\Excel\Concerns\FromCollection;

class EmployeeExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return Employee::all();
    }
//     use Exportable;

//     protected $index;

//     public function __construct($index)
//     {
//         $this->index = $index;
//     }

//    public function query()
//    {
//        return Employee::whereIn('id', $this->index);
//    }

}
