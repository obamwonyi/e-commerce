<?php

use Framework\Database\Connection\Connection;

class CreateProductsTable
{
    public function migrate(Connection $connection)
    {
        $table = $connection->createTable('products');
        $table->id('id');
        $table->string('product_name');
        $table->int('product_rating');
        $table->int('product_price');
        $table->string("product_brand");
        $table->execute();
    }
}
