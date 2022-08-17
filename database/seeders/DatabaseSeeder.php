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
        $brandCount = 10;
        $productCount = 25;

        Brand::factory($brandCount)->create();

        if (DB::table('socket')->count() !== 4) {
            DB::table('socket')->dump();
            DB::insert('insert into socket (name, created_at, updated_at) values (?,?,?)', ['AM4', Carbon::now(), Carbon::now()]);
            DB::insert('insert into socket (name, created_at, updated_at) values (?,?,?)', ['LGA-1700', Carbon::now(), Carbon::now()]);
            DB::insert('insert into socket (name, created_at, updated_at) values (?,?,?)', ['LGA-1200', Carbon::now(), Carbon::now()]);
            DB::insert('insert into socket (name, created_at, updated_at) values (?,?,?)', ['LGA-1151', Carbon::now(), Carbon::now()]);
        }

        if (DB::table('illustrationimage')->count() !== 11) {
            DB::table('illustrationimage')->dump();
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
        }

        if (DB::table('supportedramtype')->count() !== 2) {
            DB::table('supportedramtype')->dump();
            DB::insert('insert into supportedramtype (type, created_at, updated_at) values (?,?,?)', ['DDR4', Carbon::now(), Carbon::now()]);
            DB::insert('insert into supportedramtype (type, created_at, updated_at) values (?,?,?)', ['DDR5', Carbon::now(), Carbon::now()]);
        }

        Storage::factory($productCount)->create();
        PSU::factory($productCount)->create();
        PcCase::factory($productCount)->create();
        OS::factory($productCount)->create();
        Motherboard::factory($productCount)->create();
        Monitor::factory($productCount)->create();
        Memory::factory($productCount)->create();
        GPU::factory($productCount)->create();
        CpuCooler::factory($productCount)->create();
        CPU::factory($productCount)->create();
    }
}
