<?php

use Illuminate\Database\Seeder;
use App\author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = "author";
        for($i = 0; $i<10; $i++){
            $authors = new author;
            $authors->name = $author.$i;
            $authors->save();
        }
    }
}
