<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cards')->insert($this->getData());
    }

    protected function getData(): array
    {
        $faker = Factory::create();
        $data = [];
        for($i=0; $i<10; $i++) {
            $data[] = [
                'desk_list_id' => $faker->numberBetween(10,15),
                'name' => $faker->text(mt_rand(25,45)),
            ];
        }
        return $data;
    }
}
