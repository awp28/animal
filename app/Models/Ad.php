<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Ad extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'user_id', 'category_id', 'breed_id', 'title', 'type', 'price', 'currency',
        'age', 'gender', 'weight', 'quantity', 'unit', 'description', 'region_id',
        'contact_phone', 'status', 'expires_at'
    ];

    protected $casts = [
        'expires_at' => 'datetime',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')->useDisk('public');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function breed()
    {
        return $this->belongsTo(Breed::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function attributes()
    {
        return $this->hasMany(AdAttribute::class);
    }

    /** Eski view'lar uchun: $animal->img — birinchi rasm URL'i */
    public function getImgAttribute()
    {
        return $this->getFirstMediaUrl('images') ?: null;
    }
}