<?php

declare(strict_types=1);

use JustSteveKing\HttpHelpers\Enums\Headers\ContentEncoding;
use JustSteveKing\HttpHelpers\Enums\Headers\ContentType;

return [
    'defaults' => [

        'headers' => [

            'Connection' => 'keep-alive',

            'Content-Encoding' => ContentEncoding::GZIP->value,

            'Content-Type' => ContentType::JSON->value,

            'Keep-Alive' => 'timeout=5, max=100',

            'X-Vapor-Base64-Encode' => 'True',
        ],

    ],
];
