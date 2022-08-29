<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class UserHistory extends Model
{
    protected $fillable = [
        'user_id',
        'start_date',
        'end_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
