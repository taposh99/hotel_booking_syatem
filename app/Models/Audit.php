<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Audit extends Model
{
    use HasFactory;

    protected $table = 'audits';

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
