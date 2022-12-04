<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'Jose Manuel Tarula','email'=>'manuel2614@outlook.com','password' => 'Loquesea24.,.']);
        User::create(['name'=>'Ana','email'=>'ana@test.com','password' => 'Loquesea24.,.']);
    }
}
