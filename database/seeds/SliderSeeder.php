<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    public function run()
    {
        DB::statement("INSERT INTO sliders (`id`, `title`, `description`,  `btn_01_url`, `btn_02_url`, `image`) VALUES
        (1, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur', '#',  '#', 'public/frontend/images/banner/livingroom.jpg'),
        (2, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur', '#',  '#', 'public/frontend/images/banner/wide1.jpg')");
    }
}
