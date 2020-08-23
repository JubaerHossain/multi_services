<?php

use Illuminate\Database\Seeder;

class TestmonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("INSERT INTO `testmonials` (`id`, `name`,`description`, `designation`,`image`) VALUES
        (1, 'Olivia Hamel','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad quip ex ea com modo consequat. Duis aute irure.','-Envato Customer','public/front/assets/img/testmonial/author1.jpg'),
        (2, 'Willie Butler','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad quip ex ea com modo consequat. Duis aute irure.','Founder','public/front/assets/img/testmonial/author2.jpg'),
        (3, 'Diana Scott','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad quip ex ea com modo consequat. Duis aute irure.','-Envato Customer','public/front/assets/img/testmonial/author3.jpg'),
        (4, 'Jamie R. Carrillo','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad quip ex ea com modo consequat. Duis aute irure.','Founder','public/front/assets/img/testmonial/author4.jpg')");
    }
}
