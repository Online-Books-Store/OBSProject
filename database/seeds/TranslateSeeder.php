<?php

use Illuminate\Database\Seeder;
use App\Post;

class TranslateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->user_id = 1;
        $post->authore_id = 1;
        $post->category_id = 1;
        $post->title = "Girl On The Train";
        $post->save();

    }
}
