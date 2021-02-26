<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Ousmane Diallo',
            'email' => 'empro@gmail.com',
            'password' => '$2y$10$.OfzAAWNSbTYQt7NO31qVOKLyAGE5kZStSVW.Pv9DrR/gF7qvaCRy'
        ]);
    }
}
