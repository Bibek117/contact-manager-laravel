<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Company::factory()->count(5)->hasContacts(4)->create();  //each company has 4 contacts defined in relation in Company.php
       
       
        // \App\Models\Contact::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // DB::table('companies')->insert([
        //     'name' => 'Test Company',
        //     'address' => '123 Test Street',
        //     'website' => 'https://test.com',
        //     'email' => 'abc@gamil.com',
        // ]);
       // $this->call([CompanySeeder::class, ContactSeeder::class]);
    }
}
