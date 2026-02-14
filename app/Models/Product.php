<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'price',
        'stock',
        'discount_type',
        'discount_value',
        'link',
        'link_whatsapp',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}