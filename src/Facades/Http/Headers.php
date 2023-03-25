<?php

declare(strict_types=1);

namespace Treblle\Tools\Facades\Http;

use Illuminate\Support\Facades\Facade;
use Treblle\Tools\Http\DefaultHeaders;

/**
 * @method static array default()
 *
 * @see DefaultHeaders
 */
final class Headers extends Facade
{
    /**
     * @return class-string
     */
    protected static function getFacadeAccessor(): string
    {
        return DefaultHeaders::class;
    }
}
