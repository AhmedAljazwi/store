<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'order_id',
        'user_id',
        'total'
    ];

    public function user() {
        return $this->blongsTo(User::class, 'user_id', 'id');
    }
}
