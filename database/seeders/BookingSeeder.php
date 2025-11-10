<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking;
use App\Models\Service;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $serviceIds = Service::pluck('id')->toArray();

        Booking::insert([
            [
                'name' => 'Juan Pérez',
                'email' => 'juan@example.com',
                'phone' => '600111222',
                'service_id' => $serviceIds[array_rand($serviceIds)],
                'date' => now()->addDay()->toDateString(),
                'time' => '10:00',
                'status' => 'confirmed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'María López',
                'email' => 'maria@example.com',
                'phone' => '600333444',
                'service_id' => $serviceIds[array_rand($serviceIds)],
                'date' => now()->addDays(2)->toDateString(),
                'time' => '15:30',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carlos García',
                'email' => 'carlos@example.com',
                'phone' => '600555666',
                'service_id' => $serviceIds[array_rand($serviceIds)],
                'date' => now()->addDays(3)->toDateString(),
                'time' => '12:00',
                'status' => 'cancelled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
