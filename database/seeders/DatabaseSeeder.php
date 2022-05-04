<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\CPU;
use App\Models\CpuCooler;
use App\Models\GPU;
use App\Models\Memory;
use App\Models\Monitor;
use App\Models\Motherboard;
use App\Models\OS;
use App\Models\PcCase;
use App\Models\PSU;
use App\Models\Storage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Brand::factory(10)->create();
        Storage::factory(10)->create();
        PSU::factory(10)->create();
        PcCase::factory(10)->create();
        OS::factory(10)->create();
        Motherboard::factory(10)->create();
        Monitor::factory(10)->create();
        Memory::factory(10)->create();
        GPU::factory(10)->create();
        CpuCooler::factory(10)->create();
        CPU::factory(10)->create();
    }
}
