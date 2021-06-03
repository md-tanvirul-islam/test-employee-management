<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory ;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $gender = $faker->randomElement(['male', 'female']);

    	foreach (range(1,200) as $index) {
            DB::table('employees')->insert([
                'name' => $faker->name($gender),
                'email' => $faker->email,
                'phone_no' => $faker->phoneNumber,
                'address' => $faker->address,
            ]);
        }
    }
}
