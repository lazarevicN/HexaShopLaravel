<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialMediaSeeder extends Seeder
{

    private $socialMedias = [
        ['icon' => 'facebook', 'route' => 'https://www.facebook.com/'],
        ['icon' => 'instagram', 'route' => 'https://www.instagram.com/'],
        ['icon' => 'twitter', 'route' => 'https://www.twitter.com/']
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->socialMedias as $sm){
            DB::table('social_medias')->insert($sm);
        }
    }
}
