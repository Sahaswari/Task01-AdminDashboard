<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContainType;
use App\Models\User;

class ContainTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {
            ContainType::factory()->count(5)->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
