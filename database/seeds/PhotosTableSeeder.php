<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Photo;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5 ; $i++) {

            $randomID = rand(1,5);
            $newPhoto = new Photo;
            $newPhoto->user_id = $randomID;
            $newPhoto->title = $faker->sentence($nbWords = 10, $variableNbWords = true);
            $newPhoto->img = 'https://picsum.photos/id/'. rand(1, 100) .'200/300';
            $newPhoto->save();
        }
    }
}
