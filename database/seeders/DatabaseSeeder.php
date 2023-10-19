<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(1)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123')
        ]);

        \App\Models\Location::factory()->create([
            'location_name' => 'Jalan Anggrek',
            'latitude' => '-6.200000',
            'longitude' => '106.816666'
        ]);

        \App\Models\Category::factory()->create([
            'category_name' => 'Conference'
        ]);

        \App\Models\Organizer::factory()->create([
            'name_organizer' => 'Binus'
        ]);
    }
}
