<?php

namespace Modules\Category\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Hexters\Ladmin\LadminLogable;

class Category extends Model
{
    use HasFactory, LadminLogable;

    protected $fillable = [
        'category_code',
        'category_title',
        'category_image',
        'category_description',
        'is_active'
    ];
    
    protected static function newFactory()
    {
        return \Modules\Category\Database\factories\CategoryFactory::new();
    }
}
