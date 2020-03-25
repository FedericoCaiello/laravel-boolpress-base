<?php
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     public function run(Faker $faker)
    {
     for ($i = 0; $i < 10; $i++){
       $newPost = new Post;
       $newPost->title = $faker->name;
       $newPost->subtitle = $faker->name;
       $newPost->author = $faker->name;
      $newPost->description = $faker->name;
       $newPost->date = $faker->dateTime($max = 'now', $timezone = null);
       $newPost->save();
    }
  }
}
