<?php

namespace App\Models;

use Framework\Database\TableName;
use Framework\Database\Model;

#[TableName('cart')]
class AddToCart extends Model
{
    public function profile(): mixed
    {
        return $this->hasOne(Profile::class, 'id');
    }

    public function orders(): mixed
    {
        return $this->hasMany(Order::class, 'id');
    }
}
