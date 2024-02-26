<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kelas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Student::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Kelas::create([
            'nama_kelas' => '10 PPLG 1',
        ]);
        Kelas::create([
            'nama_kelas' => '10 PPLG 2',
        ]);

        Kelas::create([
            'nama_kelas' => '11 PPLG 1',
        ]);
        Kelas::create([
            'nama_kelas' => '11 PPLG 2',
        ]);
        
        Kelas::create([
            'nama_kelas' => '12 PPLG 1',
        ]);
        Kelas::create([
            'nama_kelas' => '12 PPLG 2',
        ]);

        ////////////////////////////////

        Kelas::create([
            'nama_kelas' => '10 Animasi 1',
        ]);
        Kelas::create([
            'nama_kelas' => '10 Animasi 2',
        ]);

        Kelas::create([
            'nama_kelas' => '11 Animasi 1',
        ]);
        Kelas::create([
            'nama_kelas' => '11 Animasi 2',
        ]);
        
        Kelas::create([
            'nama_kelas' => '12 Animasi 1',
        ]);
        Kelas::create([
            'nama_kelas' => '12 Animasi 2',
        ]);

        ////////////////////////////////

        Kelas::create([
            'nama_kelas' => '10 DKV 1',
        ]);
        Kelas::create([
            'nama_kelas' => '10 DKV 2',
        ]);

        Kelas::create([
            'nama_kelas' => '11 DKV 1',
        ]);
        Kelas::create([
            'nama_kelas' => '11 DKV 2',
        ]);
        
        Kelas::create([
            'nama_kelas' => '12 DKV 1',
        ]);
        Kelas::create([
            'nama_kelas' => '12 DKV 2',
        ]);
    }
}
