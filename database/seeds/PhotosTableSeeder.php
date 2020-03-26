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
      for ($i=0; $i < 10 ; $i++) {
        $newPhoto = new Photo;
        $numberOne = rand(1,100);
        $newPhoto->name = $faker->name;
        $newPhoto->img = "https://picsum.photos/id/$numberOne/300/200";
        $newPhoto->user_id = rand(1,5);
        $newPhoto->save();
      }
    }
}
