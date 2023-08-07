<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Country;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $continents = [
            ['id' => 1, 'name' => 'Africa',],
            ['id' => 2, 'name' => 'Asia',],
            ['id' => 3, 'name' => 'Europe',],
            ['id' => 4, 'name' => 'North America',],
            ['id' => 5, 'name' => 'South America',],
            ['id' => 6, 'name' => 'Antartica',],
            ['id' => 7, 'name' => 'Australia',]
        ];

        foreach($continents as $continent){
            \App\Models\Continent::factory()->create($continent)
            ->each(function ($c){
               $c->countries()->saveMany(Country::factory(10)->make());
            });
        }

        Product::factory(100)->create();
    }
}
