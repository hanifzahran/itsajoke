<?php

namespace Database\Seeders;

use Faker\Factory as Faker; //dipake buat ngefake doang
use Illuminate\Database\Seeder;
use App\models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        Admin::create([
            'fullname' => 'Muhammad Hanif Zahran',
            'email' => 'adminhanip@gmail.com',
            'password' => bcrypt('adminhanip'),
        ]);
    }
}
