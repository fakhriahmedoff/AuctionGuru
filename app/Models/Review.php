<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string name
 * @property string image
 * @property string text
 * @property string number
 */
class Review extends Model
{
    use HasFactory;

    protected $fillable = [
            "name",
            "image",
            "text",
            "number",
        ];
}
