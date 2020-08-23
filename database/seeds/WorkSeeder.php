<?php

use App\Work;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=1; $i <= 6; $i++) {
            $data = new Work();
            $data->title = $faker->city;
            $data->client = $faker->name;
            $data->description = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia';
            $data->location = $faker->streetAddress;
            $data->image = 'public/frontend/images/recent/'.$i.'.jpg';
            $data->save();
        }
    }
}
