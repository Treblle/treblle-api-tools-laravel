<?php

declare(strict_types=1);

namespace Treblle\Tools\Http\Enums\Headers;

enum AuthScheme: string
{
    case BASIC = 'Basic';
    case BEARER = 'Bearer';
    case DIGEST = 'Digest';
}
