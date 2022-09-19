<?php 

use Framework\Database\Connection\Connection;

class CreateCartTable
{
    public function migrate(Connection $connection)
    {
        $table = $connection->createTable('cart');
        $table->id('id');
        $table->string('user_email');
        $table->int('product_id');
        $table->string('product_name');
        $table->int('product_price');
        $table->execute();
    }
}