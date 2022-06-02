<?php

namespace Database\Seeders;

use App\Models\Device;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vSmartJoy4 = [
            "token"=>"k-d91c16ae4ea0",
        ];
        Device::create($vSmartJoy4);
    }
}
