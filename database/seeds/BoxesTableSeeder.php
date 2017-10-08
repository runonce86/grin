<?php

use Illuminate\Database\Seeder;

class BoxesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Box::class, 10)->create()->each(function ($box) {

            $box->pots()->saveMany(factory(App\Models\Pot::class, rand(1, 5))->make());

            $box->waterTanks()->saveMany(factory(App\Models\WaterTank::class, rand(1, 3))->make());
        });
    }
}
