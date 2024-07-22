<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $table = 'purchase';

    protected $fillable = [
        'product_purchase',
        'date_purchase',
        'transaction_purchase',
        'price_purchase',
        'account_details_purchase',
        'status_purchase',
        'user_id',
        'product_id'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
