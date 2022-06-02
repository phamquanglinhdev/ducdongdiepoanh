<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image = [
            "https://grandart.vn/uploads/danh-muc-san-pham/danhmuc-6.png",
            "https://dongbaolong.com/media/avatar/baolongbrass/lu-dong-pc.png",
            "https://baolongbrass.com/Uploads/images/avatar/avatar-do-dong-cao-cap.png",
            "https://dongbaolong.com/media/avatar/baolongbrass/bo-ngu-su-bang-dong-avatar.png",
            "https://vn-live-01.slatic.net/p/54903ebc82ea0c1dc26595f0e6c8b394.jpg",

        ];
        for ($i = 0; $i < 100; $i++) {
            $name = "Sản phẩm mẫu ".Str::random(3);
            $product = [
                "category_id" => rand(1, 4),
                "name" => $name,
                "slug" => $name,
                "description" => Str::random(200),
                "price" => rand(1000, 20000) * 1000,
                "rating" => rand(3, 5),
                "code"=>Str::random(6),
                "size" => rand(100,200)."x".rand(200,300)."x".rand(240,300),
                "first_thumbnail" => $image[rand(0,4)],
                "second_thumbnail" => $image[rand(0,4)],
                "third_thumbnail" => $image[rand(0,4)],
                "four_thumbnail" => $image[rand(0,4)],
                "five_thumbnail" => $image[rand(0,4)],
            ];
            Product::create($product);
        }
    }
}
