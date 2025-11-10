<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([
            [
                'name' => 'Corte de pelo',
                'description' => 'Corte clásico o moderno con acabado profesional.',
                'price' => 15.00,
                'duration' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Afeitado con toalla caliente',
                'description' => 'Afeitado tradicional con productos naturales.',
                'price' => 12.00,
                'duration' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Corte + Afeitado',
                'description' => 'Pack completo de cuidado personal.',
                'price' => 25.00,
                'duration' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
