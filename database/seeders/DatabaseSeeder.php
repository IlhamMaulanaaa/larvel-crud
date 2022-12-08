<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pabrik;
use App\Models\Obat;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Pabrik::factory(10)->create();

        Obat::create([
            'nama_obat' => 'PT Glaxo Wellcome Indonesia',
            'merek_obat' => 'panadol',
            'tanggal_kadaluarsa' => fake()->date(),
        ]);
        Obat::create([
            'nama_obat' => 'PT Glaxo Wellcome Indonesia',
            'merek_obat' => 'panadol',
            'tanggal_kadaluarsa' => fake()->date(),
        ]);
        Obat::create([
            'nama_obat' => 'PT Glaxo Wellcome Indonesia',
            'merek_obat' => 'panadol',
            'tanggal_kadaluarsa' => fake()->date(),
        ]);
        Obat::create([
            'nama_obat' => 'PT Glaxo Wellcome Indonesia',
            'merek_obat' => 'panadol',
            'tanggal_kadaluarsa' => fake()->date(),
        ]);
        Obat::create([
            'nama_obat' => 'PT Glaxo Wellcome Indonesia',
            'merek_obat' => 'panadol',
            'tanggal_kadaluarsa' => fake()->date(),
        ]);
        
    }
}
