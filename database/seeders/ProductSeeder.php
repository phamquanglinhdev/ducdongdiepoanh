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
        for($i=0;$i<100;$i++){
            $name = Str::random(12);
            $product = [
                "category_id"=>rand(1,4),
                "name"=>$name,
                "slug"=>$name,
                "description"=>"<p>Xin chào</p>",
                "price"=>rand(1900,2500)*1000,
                "rating"=>rand(3,5),
                "size"=>"Chưa cập nhật",
                "first_thumbnail"=>"https://pbs.twimg.com/profile_images/1285655593592791040/HtwPZgej_400x400.jpg",
                "second_thumbnail"=>"https://www.ubuy.vn/productimg/?image=aHR0cHM6Ly9tLm1lZGlhLWFtYXpvbi5jb20vaW1hZ2VzL0kvNTFvNi1XWDBYR0wuX0FDX1NMMTUwMF8uanBn.jpg",
            ];
            Product::create($product);
        }
    }
}
