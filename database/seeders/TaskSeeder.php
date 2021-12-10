<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tasks')->insert($this->getData());
    }

    protected function getData(): array
    {
        $faker = Factory::create();
        $data = [];
        for($i=0; $i<5; $i++) {
            $data[] = [
                'card_id' => $faker->numberBetween(86,112),
                'name' => $faker->text(mt_rand(25,45)),
            ];
        }
        return $data;
    }
}
