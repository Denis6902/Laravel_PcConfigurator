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
        Storage::factory(20)->create();
        PSU::factory(20)->create();
        PcCase::factory(20)->create();
        OS::factory(20)->create();
        Motherboard::factory(20)->create();
        Monitor::factory(20)->create();
        Memory::factory(20)->create();
        GPU::factory(20)->create();
        CpuCooler::factory(20)->create();
        CPU::factory(20)->create();
    }
}
