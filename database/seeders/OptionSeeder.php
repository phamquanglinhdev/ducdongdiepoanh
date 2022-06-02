<?php

namespace Database\Seeders;

use App\Models\Option;
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
            'name' => 'Description',
            'alias' => 'description',
            'type' => 'text',
            'value' => Str::random(200)
        ];
        Option::create($description);
        $key = [
            'name' => 'Key Word',
            'alias' => 'keywords',
            'type' => 'text',
            'value' => "duc dong, oanh diep"
        ];
        Option::create($key);
        $banner = [
            'name' => "Banner",
            'alias' => 'banner',
            'type' => "poster",
            'value' => "https://ducdongdiepoanh.com/assets/images/header_banner.jpg",
        ];
        Option::create($banner);
        $video = [
            'name' => "Video trang chủ",
            'alias' => 'indexVideo',
            'type' => "video",
            'value' => "x13fvMdEGs4",
        ];
        Option::create($video);
        for ($i = 0; $i < 4; $i++) {
            $image = [
                'alias' => 'indexImg_' . $i,
                'name' => "Ảnh trang chủ " . $i,
                'type' => "portrait",
                'value' => "https://ducdongdiepoanh.com/assets/images/card-image.jpg",
            ];
            Option::create($image);
        }
        $email = [
            'name' => 'Email',
            'alias' => 'email',
            'type' => 'text',
            'value' => "dodongdiepoanh@gmail.com"
        ];
        Option::create($email);
        $hotline = [
            'name' => 'Hotline',
            'alias' => 'hotline',
            'type' => 'text',
            'value' => "0949.806.083"
        ];
        Option::create($hotline);
        $zaloPlugin = [
            'name' => 'Pugin Chat Zalo',
            'alias' => 'zalo-plugin',
            'type' => 'iframe',
            'value' => '<div class="zalo-chat-widget" data-oaid="3236278465751243976" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="" data-height=""></div>
                        <script src="https://sp.zalo.me/plugins/sdk.js"></script>',
        ];
        Option::create($zaloPlugin);

        $facebookPlugin = [
            'name'=>'Plugin Chat Facebook',
            'alias'=>'fb-plugin',
            'type'=>'iframe',
            'value'=>"<div></div>",
        ];
        Option::create($facebookPlugin);
    }
}
