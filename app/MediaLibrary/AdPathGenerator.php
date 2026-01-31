<?php

namespace App\MediaLibrary;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;

/**
 * Reklama (e'lon) rasmlari: storage/app/public/ads/ ichida (bitta papka).
 */
class AdPathGenerator implements PathGenerator
{
    public function getPath(Media $media): string
    {
        return 'ads/';
    }

    public function getPathForConversions(Media $media): string
    {
        return 'ads/conversions/';
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return 'ads/responsive-images/';
    }
}
