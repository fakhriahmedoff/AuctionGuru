<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read string name
 * @property-read string email
 * @property-read string message
 * @property-read array uploaded_files
 */
class Order extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'message', 'uploaded_files'];
}
