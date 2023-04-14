<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'nama' => 'Saddam Al Karel',
            'nip' => '21536722',
            'provinsi' => 'jakarta',
            'kota' => 'semanan',
            'telepon' => '087789215634'
        ]);
    }
}
