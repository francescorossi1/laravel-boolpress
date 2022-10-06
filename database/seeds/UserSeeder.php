<?php

use Faker\Generator as Faker;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $user = new User();
        $user->name = 'Francesco';
        $user->email = 'francescorossi@boolean.it';
        $user->password = bcrypt('password');
        $user->save();

        for($i = 0; $i < 4; $i++){
            $user = new User();
            $user->name = $faker->userName();
            $user->email = $faker->email();
            $user->password = bcrypt($faker->word());
            $user->save();

        }
    }
}
