<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgriTech extends Model
{
    use HasFactory;

    protected $table = 'agritech'; // Jadval nomini aniq ko‘rsatish

    protected $fillable = [
        'img',
        'title',
        'description',
        'cost',
    ];
}
