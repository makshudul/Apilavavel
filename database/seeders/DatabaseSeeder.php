<?php

namespace Database\Seeders;

use Carbon\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use App\Models\Model\Product;
use App\Models\Model\Review;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        factory(App\Product::class,50)->create();
        factory(App\Review::class,50)->create();

    }
}
