<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DeskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('desks')->insert($this->getData());
    }

    protected function getData(): array
    {
        $faker = Factory::create();
        $data = [];
        for($i=0; $i<5; $i++) {
            $data[] = [
                \DB::table('desks')->insert([
                'name' => $faker->text(mt_rand(5,10)),
                ])
            ];
        }
        return $data;
    }
}
