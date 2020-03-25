<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for ($i=0; $i < 12; $i++) { 
           $newPost = new Post;
           $newPost->title = $faker->realText($maxNbChars = 15, $indexSize = 1);
           $newPost->img = 'https://picsum.photos/200/300';
           $newPost->author = $faker->name;
           $newPost->article = $faker->text;
           $newPost->save();

       }
    }
}
