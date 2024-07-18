<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilterPlatform extends Model
{
    use HasFactory;

    protected $table = 'filter_platform';

    protected $fillable = [
        'filter_platform'
    ];
}
