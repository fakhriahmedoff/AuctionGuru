<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $fillable = ['logo', 'logo_mobile', 'social_Links', 'homepage_title', 'homepage_meta_desc', 'homepage_image_alt_tags', 'order_title', 'order_meta_desc'];
}
