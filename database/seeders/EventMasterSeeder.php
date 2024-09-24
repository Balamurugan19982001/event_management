<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EventMaster;

class EventMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            'Event',
            'Electronic',
            'Cars',
            'Bikes',
            'Furniture',
            'Rooms',
            'Jobs',
            'Services',
            'Properties',
            'Food',
        ];

        foreach ($events as $event) {
            EventMaster::create([
                'event_name' => $event,
                'created_by' => 1, // Assuming the creator ID is 1
            ]);
        }
    }
}
