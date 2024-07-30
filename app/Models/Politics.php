<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Politics extends Model
{
    use HasFactory;

    protected $table = 'politics';

    protected $fillable = [
        'content_politics',
    ];
}
