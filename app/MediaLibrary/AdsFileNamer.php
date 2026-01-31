<?php

namespace App\MediaLibrary;

use Spatie\MediaLibrary\Support\FileNamer\DefaultFileNamer;

/**
 * Reklama rasmlari: ads/ da bitta papka bo'lgani uchun har bir fayl nomi noyob bo'lishi kerak.
 * Nom: asl-nom-uniqid (uniqid('', true) — ketma-ket 2+ rasm ham alohida fayl).
 */
class AdsFileNamer extends DefaultFileNamer
{
    public function originalFileName(string $fileName): string
    {
        $baseName = parent::originalFileName($fileName);
        return $baseName . '-' . uniqid('', true);
    }
}
