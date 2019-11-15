<?php

use Illuminate\Database\Seeder;

class UserTableSeeder​ extends Seeder
{
    public function run()
    {
        factory(App\User::class, 500)->create()->each(function($user){
            $user->save();
        });
    }
}
