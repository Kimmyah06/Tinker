<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;

    // The ORM assume that each model's corresponding database table has a primary key column named id
    protected $primaryKey = 'product_number';
}
