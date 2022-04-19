<?php

namespace Database\Seeders;

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
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        Storage::factory(50)->create();
        PSU::factory(50)->create();
        PcCase::factory(50)->create();
        OS::factory(50)->create();
        Motherboard::factory(50)->create();
//        Monitor::factory(50)->create();
//        Memory::factory(50)->create();
//        GPU::factory(50)->create();
//        CpuCooler::factory(50)->create();
//        CPU::factory(50)->create();
    }
}
