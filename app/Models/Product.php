<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'product',
        'image_platform',
        'desc_product',
        'price',
        'product_img',
        'product_param',
        'info_shop',
        'info_returns',
        'question_product',
        'type_service',
        'param_calc',
        'path_img_product'
    ];
}
