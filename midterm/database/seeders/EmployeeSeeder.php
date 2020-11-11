<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
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
        $faker = Faker::create();
        foreach(range(1,50) as $index)
        {
            $randomCompanyAlreadyCreated = Company::all()->random();
            DB::table('employees')->insert([
                'company_id' => $randomCompanyAlreadyCreated->id,
                'name' => $faker->firstName,
                'lastname' => $faker->lastName,
                'birthdate' => $faker->date("Y-m-d"),
                'personal_id' => $faker->randomNumber($nbDigits = 8),
                'salary' => $faker->randomNumber($nbDigits = 4),
            ]);
        }
    }
}
