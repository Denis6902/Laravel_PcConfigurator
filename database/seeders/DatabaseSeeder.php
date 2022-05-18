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

        DB::insert('insert into illustrationimage (src, alt, created_at, updated_at) values (?,?,?,?)', ['/./img/products/cpu.jpg', "CPU", Carbon::now(), Carbon::now()]);
        DB::insert('insert into illustrationimage (src, alt, created_at, updated_at) values (?,?,?,?)', ['/./img/products/cpucooler.jpg', "CPU Cooler", Carbon::now(), Carbon::now()]);
        DB::insert('insert into illustrationimage (src, alt, created_at, updated_at) values (?,?,?,?)', ['/./img/products/aiocpucooler.jpg', "AiO CPU Cooler", Carbon::now(), Carbon::now()]);
        DB::insert('insert into illustrationimage (src, alt, created_at, updated_at) values (?,?,?,?)', ['/./img/products/motherboard.jpg', "Motherboard", Carbon::now(), Carbon::now()]);
        DB::insert('insert into illustrationimage (src, alt, created_at, updated_at) values (?,?,?,?)', ['/./img/products/memory.jpg', "Memory", Carbon::now(), Carbon::now()]);
        DB::insert('insert into illustrationimage (src, alt, created_at, updated_at) values (?,?,?,?)', ['/./img/products/storage.jpg', "Storage", Carbon::now(), Carbon::now()]);
        DB::insert('insert into illustrationimage (src, alt, created_at, updated_at) values (?,?,?,?)', ['/./img/products/gpu.jpg', "GPU", Carbon::now(), Carbon::now()]);
        DB::insert('insert into illustrationimage (src, alt, created_at, updated_at) values (?,?,?,?)', ['/./img/products/pccase.jpg', "PC Case", Carbon::now(), Carbon::now()]);
        DB::insert('insert into illustrationimage (src, alt, created_at, updated_at) values (?,?,?,?)', ['/./img/products/psu.jpg', "PSU", Carbon::now(), Carbon::now()]);
        DB::insert('insert into illustrationimage (src, alt, created_at, updated_at) values (?,?,?,?)', ['/./img/products/os.jpg', "OS", Carbon::now(), Carbon::now()]);
        DB::insert('insert into illustrationimage (src, alt, created_at, updated_at) values (?,?,?,?)', ['/./img/products/monitor.jpg', "Monitor", Carbon::now(), Carbon::now()]);

        DB::insert('insert into supportedramtype (type, created_at, updated_at) values (?,?,?)', ['DDR4', Carbon::now(), Carbon::now()]);
        DB::insert('insert into supportedramtype (type, created_at, updated_at) values (?,?,?)', ['DDR5', Carbon::now(), Carbon::now()]);

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
