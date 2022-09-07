<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'fullname' => 'Muhammad Hanif Zahran',
            'username' => 'hanipjaran',
            'password' => bcrypt('customerhanip'),
            'email' => 'hanifzahran2@gmail.com',
            'address' => 'Jl. Kertanegara V No.1',
        ]);
    }
}
