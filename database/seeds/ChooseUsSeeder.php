<?php

use Illuminate\Database\Seeder;

class ChooseUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choose_us')->insert([
            [
                'icon' =>  'f',
                'title' => 'Certified Designer',
                'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.',
            ],
            [
                'icon' =>  'f',
                'title' => 'Top Rated Company',
                'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.',
            ],
            [
                'icon' =>  'f',
                'title' => 'Free Consultation',
                'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.',
            ],
            [
                'icon' =>  'f',
                'title' => 'Affordable Price',
                'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.',
            ],
            [
                'icon' =>  'f',
                'title' => 'Guaranteed Works',
                'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.',
            ],
            [
                'icon' =>  'f',
                'title' => '24/7 Support',
                'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.',
            ],

        ]);
    }
}
