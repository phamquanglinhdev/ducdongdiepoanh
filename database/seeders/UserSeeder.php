<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                "name"=>"Admin",
                "email"=>"Admin@adonis.com",
                "password"=>Hash::make("password"),
                "role"=>0,
            ]
        );
        User::create(
            [
                "name"=>"Phạm Quang Linh",
                "email"=>"phamquanglinhdev@gmail.com",
                "password"=>Hash::make("Linhz123@"),
            ]
        );
    }
}
