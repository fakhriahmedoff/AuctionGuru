<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    public function run(): void
    {
        Config::create([
            "logo" => '/images/config/logo.png',
            "logo_mobile" => '/images/config/logo.png',
            "social_Links" => '',
            "homepage_title" => 'AuctionGuru',
            "homepage_meta_desc" => 'AuctionGuru meta desc',
            "homepage_image_alt_tags" => 'Autction guru alt tags',
            "order_title" => 'Order now Auction guru',
            "order_meta_desc" => 'Order now Auction guru',
        ]);
    }
}
