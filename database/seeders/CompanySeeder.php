<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->truncate();
        $company = [];
        $faker = Faker::create();
        foreach(range(1,10) as $index){
            $company[] = [
               // 'name' => 'Test Company' . $index,
               'name' => $faker->company,
               //'name' => fake()->company(),
                'address' => '123 Test Street' . $index,
                'website' => 'https://test.com' . $index,
                'email' => 'company' . $index . '@gmail.com',
            ];
        }
        DB::table('companies')->insert($company);



        //use php artisan db:seed --class=CompaniesTableSeeder  for seeding
         // Company::truncate();
        // Company::create([
        //     'name' => 'Test Company',
        //     'address' => '123 Test Street',
        //     'website' => 'https://test.com',
        //     'email' => 'test@gmail.com',
        // ]);
    }
}
