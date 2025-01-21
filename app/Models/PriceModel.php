<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceModel extends Model
{
    // Specify the table name
    protected $table = 'prices';

    // Define the columns that are mass assignable
    protected $fillable = [
        'name',
        'description',
        'price',
        'category',
        'image',
    ];

    // Laravel will automatically handle `created_at` and `updated_at` by default
}
