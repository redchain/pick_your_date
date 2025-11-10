<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Schedule;
use App\Models\Service;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $services = Service::all();

        foreach ($services as $service) {
            $days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];

            foreach ($days as $day) {
                Schedule::create([
                    'service_id' => $service->id,
                    'weekday' => $day,
                    'start_time' => '09:00',
                    'end_time' => '18:00',
                ]);
            }
        }
    }
}
