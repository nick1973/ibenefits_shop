<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'category',
        'name',
        'description',
        'product_info',
        'image_url',
        'price',
        'visible',
        'new_in',
        'most_popular',
        'link_1',
        'link_2',
        'link_3',
        'link_1_display',
        'link_2_display',
        'link_3_display'

    ];
}
