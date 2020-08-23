<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=1; $i <= 8; $i++) {
            DB::table('clients')->insert([
                [
                    'name' =>  $faker->name,
                    'image' => 'public/front/assets/img/partner-img/'.$i.'.'.'png',
                ]

            ]);
            }
    }
}
