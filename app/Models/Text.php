<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $key
 * @property string $group
 * @property string $value
 */
class Text extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'group', 'value'];
}
