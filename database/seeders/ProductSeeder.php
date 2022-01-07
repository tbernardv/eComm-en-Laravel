<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Importamos DB
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Samsung mobile',
                'price' => '300',
                'description' => 'A smartphone with 8gb ram and much more features.',
                'category' => 'mobile',
                'gallery' => 'https://m.media-amazon.com/images/I/41ZGJxnJu1S.jpg'
            ],
            [
                'name' => 'Panasonic TV',
                'price' => '400',
                'description' => 'A smart TV and much more others features.',
                'category' => 'tv',
                'gallery' => 'https://media.croma.com/image/upload/v1605324320/Croma%20Assets/Entertainment/Television/Images/8941203914782.png'
            ],
            [
                'name' => 'Sony TV',
                'price' => '500',
                'description' => 'A smart TV and much more others features.',
                'category' => 'tv',
                'gallery' => 'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_01-1100-V4.jpg'
            ],
            [
                'name' => 'LG fridge',
                'price' => '600',
                'description' => 'A high quality fridge and much more features.',
                'category' => 'fridge',
                'gallery' => 'https://www.lg.com/us/images/refrigerators/md05809650/gallery/LSXS26396S_10262017_D01.JPG'
            ]
        ]);
    }
}
