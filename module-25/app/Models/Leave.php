<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Leave extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date',
        'total_day',
        'reason',
        'status',
        'user_id'
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
