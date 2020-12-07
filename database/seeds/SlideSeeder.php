<?php

use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slides')->insert([
            [
                'link'=>'none',
                'image'=>'public/source/image/slide/banner1.jpg',
            ],
            [
                'link'=>'none',
                'image'=>'public/source/image/slide/banner2.jpg',
            ],
            [
                'link'=>'none',
                'image'=>'public/source/image/slide/banner3.jpg',
            ],
            [
                'link'=>'none',
                'image'=>'public/source/image/slide/banner4.jpg',
            ],
          ]);
    }
}
