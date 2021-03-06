<?php

use Illuminate\Database\Seeder;
use App\user;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      User::truncate();

      $faker = \Faker\Factory::create();

    // Let's make sure aeveryone has the same password
    $password = Hash::make('toptal') ;

    User::create([
        'name' => 'administrator',
        'email' => 'admin@test.com',
        'password' => $password,
    ]);

    for ($i=0; $i < 10 ; $i++) {
      User::create([
          'name' => $faker->name,
          'email' => $faker->email,
          'password' => $password,
      ]);

    }


    }
}
