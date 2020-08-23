<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionSeeder::class);
        // $this->call(SliderSeeder::class);
        $this->call(WorkflowSeeder::class);
        $this->call(WorkSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(ChooseUsSeeder::class);
        $this->call(TestmonialSeeder::class);
        $this->call(BlogSeeder::class);
        // $this->call(ProductSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(TeamSeeder::class);
    }
}
