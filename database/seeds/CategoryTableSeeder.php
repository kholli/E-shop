<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'iPhone 11', 'sorting' => 'iPhone 11', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'iPhone SE', 'sorting' => 'iPhone SE', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'iPhone XR', 'sorting' => 'iPhone XR', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'iPhone 12', 'sorting' => 'iPhone 12', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'iPhone 12 Pro', 'sorting' => 'iPhone 12 Pro', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'iPhone 12 mini', 'sorting' => 'iPhone 12 mini', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'iPhone 12 Pro Max', 'sorting' => 'iPhone 12 Pro Max', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Macbook Air', 'sorting' => 'Macbook Air', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Macbook Pro', 'sorting' => 'Macbook Pro', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Apple Watch Nike', 'sorting' => 'Apple Watch Nike', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Apple Watch SE', 'sorting' => 'Apple Watch SE', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Apple Watch 6', 'sorting' => 'Apple Watch 6', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Apple Watch 3', 'sorting' => 'Apple Watch 3', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'iPad 8.Gen', 'sorting' => 'iPad 8.Gen', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'iPad Air', 'sorting' => 'iPad Air', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'iPad Mini', 'sorting' => 'iPad Mini', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'iPad Pro', 'sorting' => 'iPad Pro', 'created_at' => $now, 'updated_at' => $now],

        ]);
    }
}
