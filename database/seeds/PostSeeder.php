<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // composer require fzaninotto/faker
        $post = Faker\Factory::create();
        for($i = 0; $i<100; $i++){
            $posts = new Post;
            $posts->user_id = rand(1,10);
            $posts->author_id = rand(1,10);
            $posts->category_id = rand(1,4);
            $posts->title = $post->text(20);
            $posts->content = $post->text(200);
            $posts->save();
        }
    }
}
