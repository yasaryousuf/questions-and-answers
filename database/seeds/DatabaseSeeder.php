<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
            
        factory(App\User::class, 10)->create()->each(function($user){
            $user->save();
            factory(App\Question::class, 5)->create(['user_id'=>$user->id])->each(function($question) use ($user){
                factory(App\Comment::class, 5)->create(['user_id'=>$user->id, 'question_id'=>$question->id])->each(function($comment){
                     $comment->save();   
                });
            });
        });
        // factory(App\Question::class, 100)->create()->each(function($question){
        //     $question->save();
        // });
        // factory(App\Comment::class, 1000)->create()->each(function($question){
        //     $question->save();
        // });
    }
}
