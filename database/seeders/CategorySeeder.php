<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->nameCategory = "Gold Rings";
        $category->descriptionCategory = "Sleek bands, bold cocktail rings and must-have stacking rings—make a striking statement with our superbly crafted rings for women and men.";
        $category->priorityCategory = 4;

        $category->save();

        $category2 = new Category();
        $category2->nameCategory = "Silver Rings";
        $category2->descriptionCategory = "Striking pendants, chains, charm necklaces and more—our range of exquisitely crafted necklaces are made for turning heads, whether layered together or worn solo.";
        $category2->priorityCategory = 3;
        
        $category2->save();
        

        $category3 = new Category();
        $category3->nameCategory = "Bronze Rings";
        $category3->descriptionCategory = "Our diverse collection of charms for bracelets and necklaces welcomes you to personalize a Tiffany piece with your own point of view. Pick out the chain and charms that express your story and style";
        $category3->priorityCategory = 2;
        
        $category3->save();
    }
}
