<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdAttribute extends Model
{
    protected $fillable = ['ad_id', 'key', 'value'];

    public function ad()
    {
        return $this->belongsTo(Ad::class);
    }
}