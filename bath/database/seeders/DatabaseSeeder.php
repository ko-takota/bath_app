<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\BathSeeder;

class DatabaseSeeder extends Seeder
{
    private const SEEDERS = [
        BathSeeder::class,
    ];
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        foreach(self::SEEDERS as $seeder) {
            $this->call($seeder);
        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
