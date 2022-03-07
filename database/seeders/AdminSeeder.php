<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin::create([
            'name' => 'Administrator',
            'email' => 'bimbimxerep@gmail.com',
            'password' => bcrypt('invincibles69'),
        ]);
    }
}
