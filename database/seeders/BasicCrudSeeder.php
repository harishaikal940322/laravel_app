<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BasicCrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('clients')->insert(
            [
                'name' => 'Bakri Sdn Bhd',
                'active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
