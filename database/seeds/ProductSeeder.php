<?php

use App\Service;
use App\Products;
use App\Categories;
use App\ProductImage;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $Service = Service::latest()->get();
        foreach ($Service as $key => $value) {
                $data= new Products();
                $data->title = $faker->sentence;
                $data->slug = strtolower(str_replace(' ', '-',$data->title));
                $data->quantity = rand(20,1);
                $data->out_stock = $data->quantity;
                $data->price = 19 + $key;
                $data->discount = 2;
                $data->image = 'public/frontend/images/shop/'.($key+1).'.jpg';
                $data->service_id = $value->id;
                $data->summary = $faker->text;
                $data->desc = $faker->text;
                $data->created_by = 1;
                $data->save();

                $store = new ProductImage();
                $store->product_id = $value->id;
                $store->image = 'public/frontend/images/shop/'.($key+1).'.jpg';
                $store->save();

        }
    }
}
