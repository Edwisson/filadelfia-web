<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Sociedad;
use Illuminate\Database\Seeder;
use App\Models\MiembroSociedad;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            
            SociedadSeeder::class,
            MiembroSociedadSeeder::class
        ]);
    }
}
