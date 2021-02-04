<?php

use Illuminate\Database\Seeder;

class CategoryProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('category_product')->insert([
            [
                'category_id' => '1',
                'product_id' => '1'
            ],
            [
                'category_id' => '1',
                'product_id' => '2'
            ],
            [
                'category_id' => '1',
                'product_id' => '3'
            ],
            [
                'category_id' => '1',
                'product_id' => '4'
            ],
            [
                'category_id' => '2',
                'product_id' => '5'
            ],
            [
                'category_id' => '3',
                'product_id' => '6'
            ],
            [
                'category_id' => '5',
                'product_id' => '7'
            ],
            [
                'category_id' => '2',
                'product_id' => '8'
            ],
            [
                'category_id' => '3',
                'product_id' => '9'
            ],
            [
                'category_id' => '1',
                'product_id' => '10'
            ],
            [
                'category_id' => '1',
                'product_id' => '11'
            ],
            [
                'category_id' => '1',
                'product_id' => '12'
            ],
            [
                'category_id' => '1',
                'product_id' => '13'
            ],
            [
                'category_id' => '1',
                'product_id' => '10'
            ],
            [
                'category_id' => '4',
                'product_id' => '4'
            ],
            [
                'category_id' => '4',
                'product_id' => '5'
            ],
            [
                'category_id' => '4',
                'product_id' => '6'
            ],
            [
                'category_id' => '8',
                'product_id' => '1'
            ],
            [
                'category_id' => '8',
                'product_id' => '2'
            ],
            [
                'category_id' => '8',
                'product_id' => '3'
            ],
            [
                'category_id' => '7',
                'product_id' => '23'
            ],
            [
                'category_id' => '7',
                'product_id' => '24'
            ],
            [
                'category_id' => '7',
                'product_id' => '25'
            ],
            [
                'category_id' => '7',
                'product_id' => '26'
            ],
            [
                'category_id' => '8',
                'product_id' => '8'
            ],
            [
                'category_id' => '8',
                'product_id' => '9'
            ],
            [
                'category_id' => '8',
                'product_id' => '10'
            ],
            [
                'category_id' => '8',
                'product_id' => '11'
            ],
            [
                'category_id' => '8',
                'product_id' => '12'
            ],
            [
                'category_id' => '8',
                'product_id' => '3'
            ],
            [
                'category_id' => '9',
                'product_id' => '21'
            ],
            [
                'category_id' => '9',
                'product_id' => '22'
            ],
            [
                'category_id' => '10',
                'product_id' => '1'
            ],
            [
                'category_id' => '10',
                'product_id' => '2'
            ],
            [
                'category_id' => '10',
                'product_id' => '3'
            ],
            [
                'category_id' => '10',
                'product_id' => '10'
            ],
            [
                'category_id' => '10',
                'product_id' => '11'
            ],
            [
                'category_id' => '10',
                'product_id' => '12'
            ],
            [
                'category_id' => '11',
                'product_id' => '8'
            ],
            [
                'category_id' => '11',
                'product_id' => '17'
            ],
            [
                'category_id' => '12',
                'product_id' => '9'
            ],
            [
                'category_id' => '12',
                'product_id' => '18'
            ],
            [
                'category_id' => '13',
                'product_id' => '7'
            ],
            [
                'category_id' => '13',
                'product_id' => '16'
            ],
        ]);
    }
}

