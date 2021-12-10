<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class DeskListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('desk_lists')->insert($this->getData());
    }

    protected function getData(): array
    {
        $faker = Factory::create();
        $data = [];
        for($i=0; $i<2; $i++) {
            $data[] = [
                    'desk_id' => 33,
                    'name' => $faker->text(mt_rand(15,25)),
            ];
        }
        return $data;
    }
}
