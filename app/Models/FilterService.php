<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilterService extends Model
{
    use HasFactory;

    protected $table = 'filter_service';

    protected $fillable = [
        'filter_service'
    ];
}
