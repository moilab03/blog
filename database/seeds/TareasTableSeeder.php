<?php

use App\tareas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TareasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(tareas::class, 30)->create();
    }
}
