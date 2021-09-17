<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public static $STOCK_STATUS_IN_STOCK = 'inStock';
    public static $STOCK_STATUS_OUT_OF_STOCK = 'outOfStock';


    protected $guarded = [];
    protected $table = "products";
}
