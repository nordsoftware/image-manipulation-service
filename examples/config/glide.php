<?php

return [
    // Source filesystem
    'source'   => new League\Flysystem\Filesystem(new League\Flysystem\Adapter\Local(storage_path('files'))),
    // Cache filesystem
    'cache'    => new League\Flysystem\Filesystem(new League\Flysystem\Memory\MemoryAdapter()),
    // Image driver (gd or imagick)
    'driver'   => 'gd',
    // Response factory
    'response' => new League\Glide\Responses\LaravelResponseFactory(),
];
