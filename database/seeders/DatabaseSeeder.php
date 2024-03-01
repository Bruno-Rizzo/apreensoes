<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            RegimeSeeder::class,
            CoordinationSeeder::class,
            SectorSeeder::class,
            FactionSeeder::class,
            SeizureTypeSeeder::class,
            PrisionalUnitySeeder::class,
        ]);
    }
}
