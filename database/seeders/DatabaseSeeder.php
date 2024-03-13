<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();

        User::factory()->create(
            [
                'id' => 1, // 'id' is not mass-assignable, so we need to set it explicitly
                'name' => 'Abdul',
                'email' => 'test@example.com',
            ]

        );
        User::factory()->create(
            [
                'id' => 2, // 'id' is not mass-assignable, so we need to set it explicitly
                'name' => 'Wahab',
                'email' => 'Wahab@example.com',
                'user_id' => 1,
            ]

        );
        User::factory()->create(
            [
                'id' => 3, // 'id' is not mass-assignable, so we need to set it explicitly
                'name' => 'Adeel',
                'email' => 'adeel@asd.com',
                'user_id' => 1,
            ]
        );
        User::factory()->create(
            [
                'id' => 4, // 'id' is not mass-assignable, so we need to set it explicitly
                'name' => 'Fatima',
                'email' => 'fatima@asd.com',
                'user_id' => 2,
            ]
        );
    }
}
