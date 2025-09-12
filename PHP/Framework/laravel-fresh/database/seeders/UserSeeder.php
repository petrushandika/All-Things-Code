<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::updateOrCreate(
            ['email' => 'john@example.com'],
            [
                'name' => 'John Doe',
                'password' => Hash::make('password'),
            ]
        );

        $user->profile()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'avatar'   => 'https://example.com/avatar.jpg',
                'location' => 'New York, USA',
                'bio'      => 'This is a sample bio for the user profile.',
            ]
        );
    }
}
