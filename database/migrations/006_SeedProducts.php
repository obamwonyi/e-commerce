<?php

use Framework\Database\Connection\Connection;

class SeedProducts
{
    public function migrate(Connection $connection)
    {
        $products = [
            [
                'product_name' => 'Iphone 5',
                'product_rating' => 3,
                'product_price' => 700,
                'product_brand' => "Apple"
            ],
            /*-----------------------one item ----------------*/
            [
                'product_name' => 'Iphone 6',
                'product_rating' => 5,
                'product_price' => 750,
                'product_brand' => "Apple"
            ],
            /*-----------------------one item ----------------*/
            [
                'product_name' => 'Iphone 7',
                'product_rating' => 4,
                'product_price' => 800,
                'product_brand' => "Apple"
            ],
            /*-----------------------one item ----------------*/
            [
                'product_name' => 'Redmi Note',
                'product_rating' => 3,
                'product_price' => 450,
                'product_brand' => "Xiaomi"
            ],
            /*-----------------------one item ----------------*/
            [
                'product_name' => 'Redmi Note 7',
                'product_rating' => 4,
                'product_price' => 650,
                'product_brand' => "Xiaomi"
            ],
            /*-----------------------one item ----------------*/
            [
                'product_name' => 'Redmi Note 7 Pro',
                'product_rating' => 4,
                'product_price' => 700,
                'product_brand' => "Xiaomi"
            ],
            /*-----------------------one item ----------------*/
            [
                'product_name' => 'Redmi Note 7 Pro',
                'product_rating' => 4,
                'product_price' => 700,
                'product_brand' => "Xiaomi"
            ],
            /*-----------------------one item ----------------*/
            [
                'product_name' => 'Redmi Note 7 Pro',
                'product_rating' => 4,
                'product_price' => 700,
                'product_brand' => "Xiaomi"
            ],
            /*-----------------------one item ----------------*/
            [
                'product_name' => 'Redmi Note 7 Pro',
                'product_rating' => 4,
                'product_price' => 700,
                'product_brand' => "Xiaomi"
            ],
            /*-----------------------one item ----------------*/
            [
                'product_name' => 'Samsung Galaxy 10',
                'product_rating' => 5,
                'product_price' => 800,
                'product_brand' => "Samsung"
            ],
            /*-----------------------one item ----------------*/
            [
                'product_name' => 'Samsung Galaxy S7',
                'product_rating' => 5,
                'product_price' => 700,
                'product_brand' => "Samsung"
            ],
            /*-----------------------one item ----------------*/
            [
                'product_name' => 'Samsung Galaxy S6',
                'product_rating' => 4,
                'product_price' => 650,
                'product_brand' => "Samsung"
            ],
            /*-----------------------one item ----------------*/
            [
                'product_name' => 'Redmi Note 9',
                'product_rating' => 4,
                'product_price' => 700,
                'product_brand' => "Xiaomi"
            ],
            /*-----------------------one item ----------------*/
        ];

        foreach ($products as $product) {
            $connection
                ->query()
                ->from('products')
                ->insert([
                    'product_name',
                    'product_rating',
                    'product_price',
                    'product_brand'
                ], $product);
        }
    }
}
