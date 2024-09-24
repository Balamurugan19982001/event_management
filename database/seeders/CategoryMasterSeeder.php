<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryMaster;

class CategoryMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            'Events',
            'Electronics',
            'Cars',
            'Bikes',
            'Furnitures',
            'Rooms',
            'Jobs',
            'Services',
            'Properties',
            'Food',
        ];

        foreach ($category as $cat) {
            $icons_name = strtolower(str_replace(' ', '_', trim($cat)));
            CategoryMaster::create([
                'name' => $cat,
                'created_by' => 1,
                'icon_path' => 'icons/'.$icons_name.'.png'
            ]);
        }
    }
}
