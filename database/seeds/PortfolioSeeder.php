<?php

use App\Service;
use App\Portfolio;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $Service = Service::latest()->get();
        foreach ($Service as $key => $value) {
            for ($i=1; $i <= 2; $i++) {
                $data = new Portfolio();
                $data->title = $faker->city;
                $data->service_id = $value->id;
                $data->url = url('/');
                $data->image = 'public/front/assets/img/portfolio/pf ('.$i.').jpg';
                $data->save();
            }
        }
    }
}
