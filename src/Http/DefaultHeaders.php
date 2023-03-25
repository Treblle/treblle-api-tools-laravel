<?php

declare(strict_types=1);

namespace Treblle\Tools\Http;

final class DefaultHeaders
{
    public function default(): array
    {
        return (array) config('tools.defaults.headers');
    }
}
