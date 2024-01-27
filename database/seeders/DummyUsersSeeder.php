<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'Rionaldi Saputra',
                'email' => 'rionaldisaputra@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('12345')
            ],

        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
