<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Rateable;

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
        'path_img_product',
        'category',
        'filter_price',
        'filter_platform',
        'filter_service',
        'name',
        'rating',
        'comment',
        'avatar',
        'average_rating',
        'date_send_rating',
        'count_send',
        'count_buy',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
