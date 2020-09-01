<?php

use Illuminate\Database\Seeder;
use App\category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = "category";
        for($i = 0; $i<10; $i++){
            $categories = new category;
            $categories->category_name = $category.$i;
            $categories->save();
        }
    }
}
