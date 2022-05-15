<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sp1 = [
            "name"=>"Tượng thờ",
            "slug"=>"tuong-tho.seed",
            "thumbnail"=>"https://salt.tikicdn.com/ts/tmp/60/69/a5/b3cadb26eac5426737842401eb21e797.jpg",
        ];
        $sp2 = [
            "name"=>"Đồ thờ cúng",
            "slug"=>"do-tho-cung.seed",
            "thumbnail"=>"https://i.pinimg.com/originals/cf/b9/16/cfb916b88d5c6d80b8b4c4e6c43e194a.jpg",
        ];
        $sp3 = [
            "name"=>"Đồ phong thủy",
            "slug"=>"do-phong-thuy.seed",
            "thumbnail"=>"https://kimtuthap.vn/wp-content/uploads/2019/10/dong-xu-tam-tai-1.jpg",
        ];
        $sp4 = [
            "name"=>"Đồ trang trí",
            "slug"=>"do-trang-tri.seed",
            "thumbnail"=>"https://i0.wp.com/namancraft.vn/wp-content/uploads/2020/09/Brass-vase-with-square-mouth-Brass-Collection-3.jpg?resize=300%2C300&ssl=1",
        ];
        Category::create($sp1);
        Category::create($sp2);
        Category::create($sp3);
        Category::create($sp4);
    }
}
