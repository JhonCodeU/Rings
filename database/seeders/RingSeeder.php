<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ring;

class RingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ring = new Ring();
        $ring->ring_description = "Gold Rings";
        $ring->ring_reference = "Ball Dangle Ring";
        $ring->ring_material = "Gold";
        $ring->ring_preview = "gold.jpg";
        $ring->category_id = 1;

        $ring->save();

        $ring2 = new Ring();
        $ring2->ring_description = "Gold Rings";
        $ring2->ring_reference = "Ball Dangle Ring";
        $ring2->ring_material = "Gold";
        $ring2->ring_preview = "gold1.png";
        $ring2->category_id = 1;

        $ring2->save();

        $ring3 = new Ring();
        $ring3->ring_description = "Gold Rings";
        $ring3->ring_reference = "Ball Dangle Ring";
        $ring3->ring_material = "Gold";
        $ring3->ring_preview = "gold2.jpg";
        $ring3->category_id = 1;

        $ring3->save();


        $ring3 = new Ring();
        $ring3->ring_description = "Gold Rings";
        $ring3->ring_reference = "Ball Dangle Ring";
        $ring3->ring_material = "Gold";
        $ring3->ring_preview = "gold3.jpg";
        $ring3->category_id = 1;

        $ring3->save();

        $ring4 = new Ring();
        $ring4->ring_description = "Silver Rings";
        $ring4->ring_reference = "Ball Dangle Ring";
        $ring4->ring_material = "Silver";
        $ring4->ring_preview = "silver.jpg";
        $ring4->category_id = 2;

        $ring4->save();

        $ring5 = new Ring();
        $ring5->ring_description = "Silver Rings";
        $ring5->ring_reference = "Ball Dangle Ring";
        $ring5->ring_material = "Silver";
        $ring5->ring_preview = "silver1.png";
        $ring5->category_id = 2;

        $ring5->save();

        $ring6 = new Ring();
        $ring6->ring_description = "Silver Rings";
        $ring6->ring_reference = "Ball Dangle Ring";
        $ring6->ring_material = "Silver";
        $ring6->ring_preview = "silver2.jpg";
        $ring6->category_id = 2;

        $ring6->save();


        $ring7 = new Ring();
        $ring7->ring_description = "Silver Rings";
        $ring7->ring_reference = "Ball Dangle Ring";
        $ring7->ring_material = "Silver";
        $ring7->ring_preview = "silver3.webp";
        $ring7->category_id = 2;

        $ring7->save();

        

        $ring8 = new Ring();
        $ring8->ring_description = "Bronze Rings";
        $ring8->ring_reference = "Ball Dangle Ring";
        $ring8->ring_material = "Bronze";
        $ring8->ring_preview = "bronze.webp";
        $ring8->category_id = 3;

        $ring8->save();


        

        $ring9 = new Ring();
        $ring9->ring_description = "Bronze Rings";
        $ring9->ring_reference = "Ball Dangle Ring";
        $ring9->ring_material = "Bronze";
        $ring9->ring_preview = "bronze1.jpg";
        $ring9->category_id = 3;

        $ring9->save();
        
    }
}
