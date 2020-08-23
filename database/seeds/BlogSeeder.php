<?php

use App\Blog;
use App\Service;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $cats = Service::all();
        for ($i = 1; $i <= 2; $i++) {
            foreach ($cats as $key => $value) {
                $store = new Blog();
                $store->user_id = 1;
                $store->service_id = $value->id;
                $store->title = $faker->sentence;
                $store->slug = strtolower(str_replace(' ', '-',$store->title));
                $store->summary = $faker->text;
                $store->content = $faker->text;
                $store->tags = $faker->word;
                $store->image = 'public/front/assets/img/blog/'.$i.'.'.'jpg';
                $store->save();
            }
            
        }
    }
}
