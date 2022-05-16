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
use App\Models\Socket;
use Database\Factories\SocketFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

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
        DB::insert('insert into socket (name, created_at, updated_at) values (?,?,?)', ['AM4', Carbon::now(), Carbon::now()]);
        DB::insert('insert into socket (name, created_at, updated_at) values (?,?,?)', ['LGA-1700', Carbon::now(), Carbon::now()]);
        DB::insert('insert into socket (name, created_at, updated_at) values (?,?,?)', ['LGA-1200', Carbon::now(), Carbon::now()]);
        DB::insert('insert into socket (name, created_at, updated_at) values (?,?,?)', ['LGA-1151', Carbon::now(), Carbon::now()]);


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
