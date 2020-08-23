<?php

use App\Team;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=1; $i <= 4; $i++) {
            $data = new Team();
            $data->name = $faker->name;
            $data->designation = $faker->jobTitle;
            $data->description = $faker->text;
            $data->image = 'public/front/assets/img/team/'.$i.'.jpg';
            $data->save();
        }
    }
}
