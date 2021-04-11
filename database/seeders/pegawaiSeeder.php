<?php

namespace Database\Seeders;

use Carbon\Factory;
use Illuminate\Database\Seeder;
use App\Pegawai;

class pegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\Pegawai::class, 10)->create();
    }
}
