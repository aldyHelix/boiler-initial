<?php

namespace Modules\AddOnFeature\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AddOnFeature extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\AddOnFeature\Database\factories\AddOnFeatureFactory::new();
    }
}
