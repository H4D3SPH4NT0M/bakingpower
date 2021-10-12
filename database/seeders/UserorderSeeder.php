<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserorderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   
         DB::table('products')->insert([
  

        [
            'id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'product_listings' => '',
            'product_pictures' => '',
            'user_orders' => '',
            'product_name' => 'multi grain bread',
            'product_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Donec et odio pellentesque diam volutpat commodo sed egestas.',
            'product_price' => '1.00',
            'product_quantity' => '10',
            'product_category' => 'bread',
            'product_subcategory' => 'multi grain',
        ],
        [
            'id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
            'product_listings' => '',
            'product_pictures' => '',
            'user_orders' => '',
            'product_name' => 'Bagels',
            'product_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Donec et odio pellentesque diam volutpat commodo sed egestas.',
            'product_price' => '2.00',
            'product_quantity' => '10',
            'product_category' => 'bread',
            'product_subcategory' => 'multi grain',
          ],
          [
            'id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'product_listings' => '',
            'product_pictures' => '',
            'user_orders' => '',
            'product_name' => 'White Bread',
            'product_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Donec et odio pellentesque diam volutpat commodo sed egestas.',
            'product_price' => '3.00',
            'product_quantity' => '10',
            'product_category' => 'bread',
            'product_subcategory' => 'multi grain',
          ],
          [
            'id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'product_listings' => '',
            'product_pictures' => '',
            'user_orders' => '',
            'product_name' => 'Baguette',
            'product_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Donec et odio pellentesque diam volutpat commodo sed egestas.',
            'product_price' => '3.00',
            'product_quantity' => '10',
            'product_category' => 'bread',
            'product_subcategory' => 'multi grain',
          ],
          [
            'id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'product_listings' => '',
            'product_pictures' => '',
            'user_orders' => '',
            'product_name' => 'Masala Bun',
            'product_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Donec et odio pellentesque diam volutpat commodo sed egestas.',
            'product_price' => '5.00',
            'product_quantity' => '10',
            'product_category' => 'bread',
            'product_subcategory' => 'multi grain',
          ],
          [
            'id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'product_listings' => '',
            'product_pictures' => '',
            'user_orders' => '',
            'product_name' => 'Croissant',
            'product_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Donec et odio pellentesque diam volutpat commodo sed egestas.',
            'product_price' => '4.00',
            'product_quantity' => '10',
            'product_category' => 'bread',
            'product_subcategory' => 'multi grain',
        ]
       
    ]);


    


    }
}