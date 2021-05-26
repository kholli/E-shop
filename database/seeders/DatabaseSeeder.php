<?php

namespace Database\Seeders;

use App\Models\Opravy;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(OpravyTableSeeder::class);


        // \App\Models\User::fphpactory(10)->create();
    }
}
