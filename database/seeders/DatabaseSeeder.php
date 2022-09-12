<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'Bima Hayu Nugraha',
            'username' => 'bimahayunugraha',
            'email' => 'bima@gmail.com',
            'phone' => '087758524277',
            'address' => 'Magetan',
            'password' => bcrypt('bima071200'),
            'roles' => 'admin',
        ]);

        User::create([
            'name' => 'Muhammad Yahya Luqmanulhakim',
            'username' => 'muhammadyahyaluqmanulhakim',
            'email' => 'yahya123@gmail.com',
            'phone' => '081252100923',
            'address' => 'Magetan',
            'password' => bcrypt('yahya110300'),
            'roles' => 'admin',
        ]);
    }
}
