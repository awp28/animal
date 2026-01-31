<?php

return [

    'disk_name' => env('MEDIA_DISK', 'public'),
    'max_file_size' => 1024 * 1024 * 10,
    'queue_name' => '',
    'queue_conversions_by_default' => env('QUEUE_CONVERSIONS_BY_DEFAULT', true),
    'media_model' => Spatie\MediaLibrary\MediaCollections\Models\Media::class,
    'temporary_upload_model' => Spatie\MediaLibraryPro\Models\TemporaryUpload::class,
    'enable_temporary_uploads_session_affinity' => true,
    'generate_thumbnails_for_temporary_uploads' => true,
    'file_namer' => \App\MediaLibrary\AdsFileNamer::class,
    'path_generator' => \App\MediaLibrary\AdPathGenerator::class,


    /*
     * E'lon (Ad) uchun rasmlar to'g'ridan-to'g'ri storage/app/public/ads/ ichida (raqamli papkalarsiz).
     */
    'custom_path_generators' => [
        \App\Models\Ad::class => \App\MediaLibrary\AdPathGenerator::class,
    ],

    'url_generator' => Spatie\MediaLibrary\Support\UrlGenerator\DefaultUrlGenerator::class,
    'moves_media_on_update' => false,
    'version_urls' => false,

    'image_optimizers' => [
        Spatie\ImageOptimizer\Optimizers\Jpegoptim::class => ['-m85', '--force', '--strip-all', '--all-progressive'],
        Spatie\ImageOptimizer\Optimizers\Pngquant::class => ['--force'],
        Spatie\ImageOptimizer\Optimizers\Optipng::class => ['-i0', '-o2', '-quiet'],
        Spatie\ImageOptimizer\Optimizers\Svgo::class => ['--disable=cleanupIDs'],
        Spatie\ImageOptimizer\Optimizers\Gifsicle::class => ['-b', '-O3'],
        Spatie\ImageOptimizer\Optimizers\Cwebp::class => ['-m 6', '-pass 10', '-mt', '-q 90'],
    ],

    'image_generators' => [
        Spatie\MediaLibrary\Conversions\ImageGenerators\Image::class,
        Spatie\MediaLibrary\Conversions\ImageGenerators\Webp::class,
        Spatie\MediaLibrary\Conversions\ImageGenerators\Pdf::class,
        Spatie\MediaLibrary\Conversions\ImageGenerators\Svg::class,
        Spatie\MediaLibrary\Conversions\ImageGenerators\Video::class,
    ],

    'temporary_directory_path' => null,
    'image_driver' => env('IMAGE_DRIVER', 'gd'),
    'ffmpeg_path' => env('FFMPEG_PATH', '/usr/bin/ffmpeg'),
    'ffprobe_path' => env('FFPROBE_PATH', '/usr/bin/ffprobe'),

    'jobs' => [
        'perform_conversions' => Spatie\MediaLibrary\Conversions\Jobs\PerformConversionsJob::class,
        'generate_responsive_images' => Spatie\MediaLibrary\ResponsiveImages\Jobs\GenerateResponsiveImagesJob::class,
    ],

    'media_downloader' => Spatie\MediaLibrary\Downloaders\DefaultDownloader::class,
    'remote' => ['extra_headers' => ['CacheControl' => 'max-age=604800']],

    'responsive_images' => [
        'width_calculator' => Spatie\MediaLibrary\ResponsiveImages\WidthCalculator\FileSizeOptimizedWidthCalculator::class,
        'use_tiny_placeholders' => true,
        'tiny_placeholder_generator' => Spatie\MediaLibrary\ResponsiveImages\TinyPlaceholderGenerator\Blurred::class,
    ],

    'enable_vapor_uploads' => env('ENABLE_MEDIA_LIBRARY_VAPOR_UPLOADS', false),
    'default_loading_attribute_value' => null,
    'prefix' => env('MEDIA_PREFIX', ''),
];
