<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
               'name'=>'LG Mobile',
               'price'=>'20000',
               'category'=>'mobile',
               'description'=>'A SmartPhone with 4gb ram and much more features',
               'gallery'=>'https://images.pexels.com/photos/35177/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'
            ],
            [
                'name'=>'MacBook Laptop',
                'price'=>'200000',
                'category'=>'laptopn',
                'description'=>'A MacBook Has many features',
                'gallery'=>'https://images.pexels.com/photos/4793154/pexels-photo-4793154.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'
             ],
             [
                'name'=>'USB',
                'price'=>'200',
                'category'=>'USB',
                'description'=>'USB with 32gb',
                'gallery'=>'https://images.pexels.com/photos/4792751/pexels-photo-4792751.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'
             ],
             [
                'name'=>'KeyBoard',
                'price'=>'2000',
                'category'=>'KeyBoard',
                'description'=>'A with beautiful features',
                'gallery'=>'https://images.pexels.com/photos/4792724/pexels-photo-4792724.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'
             ],
        ]);
    }
}
