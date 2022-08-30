<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property-read int id
 * @property-read string name
 * @property-read string email
 * @property-read string message
 * @property-read array uploaded_files
 */
class Order extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'message', 'plan_id', 'payment_method' ,'uploaded_files'];

    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class,'plan_id','id');
    }
}
