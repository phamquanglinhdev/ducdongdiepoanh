<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $description = [
            'name'=>'Description',
            'alias'=>'description',
            'type'=>'text',
            'value'=> Str::random(200)
        ];
        Option::create($description);
        $key = [
            'name'=>'Key Word',
            'alias'=>'keywords',
            'type'=>'text',
            'value'=>"duc dong, oanh diep"
        ];
        Option::create($key);
        $banner = [
            'name' => "Banner",
            'alias'=>'banner',
            'type'=>"poster",
            'value'=>"https://ducdongdiepoanh.com/assets/images/header_banner.jpg",
        ];
        Option::create($banner);
        $video = [
            'name' => "Video trang chủ",
            'alias'=>'indexVideo',
            'type'=>"video",
            'value'=>"https://youtu.be/x13fvMdEGs4",
        ];
        Option::create($video);
        for($i = 0;$i<4;$i++){
            $image = [
                'alias'=>'indexImg_'.$i,
                'name' => "Ảnh trang chủ ".$i,
                'type'=>"portrait",
                'value'=>"https://ducdongdiepoanh.com/assets/images/card-image.jpg",
            ];
            Option::create($image);
        }
    }
}
