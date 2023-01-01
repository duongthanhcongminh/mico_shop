<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'mico shop',
                'email' => 'mico_shop@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 3,
                'name' => 'Shane Lynch',
                'email' => 'ShaneLynch@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-0.png',
                'level' => 1,
                'description' => 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo'
            ],
            [
                'id' => 4,
                'name' => 'Brandon Kelley',
                'email' => 'BrandonKelley@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.png',
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 5,
                'name' => 'Roy Banks',
                'email' => 'RoyBanks@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.png',
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 6,
                'name' => 'test',
                'email' => 'test@test',
                'password' => Hash::make('123'),
                'avatar' => 'banner-1_63a8885542dc0_221226_122853.png',
                'level' => 5,
                'description' => null,
            ],
        ]);

        DB::table('blogs')->insert([
            [
                'user_id' => 1,
                'title' => 'The Personality Trait That Makes People Happier',
                'subtitle' => '',
                'image' => 'blog-1.jpg',
                'category' => 'TRAVEL',
                'content' => '',
            ],
            [
                'user_id' => 1,
                'title' => 'This was one of our first days in Hawaii last week.',
                'subtitle' => '',
                'image' => 'blog-2.jpg',
                'category' => 'FASHION',
                'content' => '',
            ],
            [
                'user_id' => 1,
                'title' => 'Last week I had my first work trip of the year to Sonoma Valley',
                'subtitle' => '',
                'image' => 'blog-3.jpg',
                'category' => 'TRAVEL',
                'content' => '',
            ],
            [
                'user_id' => 1,
                'title' => 'Happppppy New Year! I know I am a little late on this post',
                'subtitle' => '',
                'image' => 'blog-4.jpg',
                'category' => 'FASHION',
                'content' => '',
            ],
            [
                'user_id' => 1,
                'title' => 'Absolue collection. The Lancome team has been one…',
                'subtitle' => '',
                'image' => 'blog-5.jpg',
                'category' => 'FASHION',
                'content' => '',
            ],
            [
                'user_id' => 1,
                'title' => 'Writing has always been kind of therapeutic for me',
                'subtitle' => '',
                'image' => 'blog-6.jpg',
                'category' => 'FASHION',
                'content' => '',
            ],
        ]);

        DB::table('brands')->insert([
            [
                'name' => 'Calvin Klein',
            ],
            [
                'name' => 'Diesel',
            ],
            [
                'name' => 'Polo',
            ],
            [
                'name' => 'Tommy Hilfiger',
            ],
        ]);

        DB::table('product_categories')->insert([
            [
                'name' => 'boy',
            ],
            [
                'name' => 'girl',
            ],
            [
                'name' => 'unisex',
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'Patterned Ruffled Dress',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                'content' => '',
                'price' => 19.99,
                'qty' => 56,
                'discount' => null,
                'weight' => null,
                'sku' => '00012',
                'featured' => true,
                'tag' => 'Dress',
            ],
            [
                'id' => 2,
                'brand_id' => 2,
                'product_category_id' => 2,
                'name' => 'Cotton Jersey Dress',
                'description' => 'Dress in soft cotton jersey with a printed pattern. Round neckline, long sleeves, and gathered seam with full, flared skirt.',
                'content' => 'Dress in soft cotton jersey with a printed pattern. Round neckline, long sleeves, and gathered seam with full, flared skirt.',
                'price' => 8.99,
                'qty' => 20,
                'discount' => null,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Dress',
            ],
            [
                'id' => 3,
                'brand_id' => 2,
                'product_category_id' => 2,
                'name' => 'Glittery Cardigan',
                'description' => 'Soft, knit cardigan in with glittery threads. Round neckline, buttons at front, and long sleeves. Ribbing at cuffs and hem.',
                'content' => 'Soft, knit cardigan in with glittery threads. Round neckline, buttons at front, and long sleeves. Ribbing at cuffs and hem.',
                'price' => 8.99,
                'qty' => 20,
                'discount' => null,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Sweaters',
            ],
            [
                'id' => 4,
                'brand_id' => 2,
                'product_category_id' => 3,
                'name' => 'Fine-knit Cotton Cardigan',
                'description' => 'Fine-knit cardigan in soft cotton. Buttons at front, straight-cut hem, and ribbing at neckline, cuffs, and hem.',
                'content' => 'Fine-knit cardigan in soft cotton. Buttons at front, straight-cut hem, and ribbing at neckline, cuffs, and hem.',
                'price' => 12.99,
                'qty' => 20,
                'discount' => null,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Sweaters',
            ],
            [
                'id' => 5,
                'brand_id' => 2,
                'product_category_id' => 2,
                'name' => "Tulle Skirt",
                'description' => 'Flared skirt in tulle with an elasticized waistband. Lined.',
                'content' => 'Flared skirt in tulle with an elasticized waistband. Lined.',
                'price' => 14.99,
                'qty' => 20,
                'discount' => null,
                'weight' => null,
                'sku' => null,
                'featured' => false,
                'tag' => 'Skirts',
            ],
            [
                'id' => 6,
                'brand_id' => 2,
                'product_category_id' => 2,
                'name' => 'Flared Leggings',
                'description' => 'Slim-fit leggings in soft jersey with covered elastic at waistband. Flared hems.',
                'content' => 'Slim-fit leggings in soft jersey with covered elastic at waistband. Flared hems.',
                'price' => 9.99,
                'qty' => 20,
                'discount' => null,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Pants',
            ],
            [
                'id' => 7,
                'brand_id' => 2,
                'product_category_id' => 1,
                'name' => 'Cotton Shirt',
                'description' => 'Long-sleeved shirt in airy, woven cotton fabric. Turn-down collar, buttons at front and at cuffs, and yoke at back. Rounded hem.',
                'content' => 'Long-sleeved shirt in airy, woven cotton fabric. Turn-down collar, buttons at front and at cuffs, and yoke at back. Rounded hem.',
                'price' => 9.99,
                'qty' => 20,
                'discount' => null,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Shirts',
            ],
            [
                'id' => 8,
                'brand_id' => 2,
                'product_category_id' => 1,
                'name' => 'Slim Fit Corduroy Pants',
                'description' => 'Slim-fit pants in soft, narrow-wale cotton corduroy. Adjustable, elasticized waistband, mock fly with snap fastener, and front and back pockets.',
                'content' => 'Slim-fit pants in soft, narrow-wale cotton corduroy. Adjustable, elasticized waistband, mock fly with snap fastener, and front and back pockets.',
                'price' => 14.99,
                'qty' => 20,
                'discount' => null,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Pants',
            ],
            [
                'id' => 9,
                'brand_id' => 2,
                'product_category_id' => 3,
                'name' => 'Suit Pants',
                'description' => 'Suit pants in woven fabric with an adjustable elasticized waistband and zip fly with button. Side pockets, mock back pocket, and legs with creases.',
                'content' => 'Suit pants in woven fabric with an adjustable elasticized waistband and zip fly with button. Side pockets, mock back pocket, and legs with creases.',
                'price' => 9.99,
                'qty' => 20,
                'discount' => null,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Pants',
            ],
        ]);

        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'product-1.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-1.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-3.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-4.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-5.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-6.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-7.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-2.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-1.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-2.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-3.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-4.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-5.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-6.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-7.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3-1.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3-2.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-1.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-2.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-3.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-4.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-5.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-6.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-7.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5-1.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-1.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-2.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-3.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7-1.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-1.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-2.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-3.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-4.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-5.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9-1.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9-2.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9-3.jpg',
            ],
        ]);

        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'color' => 'red',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'yellow',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'violet',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'red',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'yellow',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'violet',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'red',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'yellow',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'violet',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'black',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'black',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'black',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'color' => 'red',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'color' => 'yellow',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'color' => 'violet',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'color' => 'red',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'color' => 'yellow',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'color' => 'violet',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'color' => 'red',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'color' => 'yellow',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'color' => 'violet',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'color' => 'black',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'color' => 'black',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'color' => 'black',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'color' => 'red',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'color' => 'yellow',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'color' => 'violet',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'color' => 'red',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'color' => 'yellow',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'color' => 'violet',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'color' => 'red',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'color' => 'yellow',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'color' => 'violet',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'color' => 'black',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'color' => 'black',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'color' => 'black',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 4,
                'color' => 'red',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 4,
                'color' => 'yellow',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 4,
                'color' => 'violet',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 4,
                'color' => 'red',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 4,
                'color' => 'yellow',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 4,
                'color' => 'violet',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 4,
                'color' => 'red',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 4,
                'color' => 'yellow',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 4,
                'color' => 'violet',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 4,
                'color' => 'black',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 4,
                'color' => 'black',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 4,
                'color' => 'black',
                'size' => 'L',
                'qty' => 5,
            ],
        ]);


    }
}

