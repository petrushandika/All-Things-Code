<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        if ($user && !$user->profile) {
            Profile::create([
                'user_id'  => $user->id,
                'avatar'   => 'https://example.com/avatar.jpg',
                'location' => 'New York, USA',
                'bio'      => 'This is a sample bio for the user profile.',
            ]);
        }
    }
}
