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
        factory(App\Tag::class, 10)->create();

        // Get all the roles attaching up to 3 random roles to each user
        $tags = App\Tag::all();


        factory(App\User::class, 10)->create()->each(function($user) use ($tags){
            $user->save();
            factory(App\Question::class, 5)->create(['user_id'=>$user->id])->each(function($question) use ($user, $tags){
                
                $question->tags()->attach(
                    $tags->random(rand(1, 10))->pluck('id')->toArray()
                ); 
                factory(App\Comment::class, 5)->create(['user_id'=>$user->id, 'question_id'=>$question->id])->each(function($comment){
                     $comment->save();   
                });
            });
        });
    }
}
