<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $table = 'insurance';
    protected $fillable = [
        'name',
        'description',
        'product_info',
        'image_url',
        'price',
        'visible',
        'new_in',
        'link_1',
        'link_2',
        'link_3',
        'link_1_display',
        'link_2_display',
        'link_3_display'

    ];
}
