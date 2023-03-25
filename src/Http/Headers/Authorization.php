<?php

declare(strict_types=1);

namespace Treblle\Tools\Http\Headers;

use Treblle\Tools\Http\Enums\Headers\AuthScheme;

/**
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Authorization
 */
final class Authorization
{
    public function __construct(
        private readonly AuthScheme $type,
        private readonly string $credentials,
    ) {
    }

    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'credentials' => $this->credentials,
        ];
    }

    public function toHeader(): array
    {
        return [
            'Authorization' => $this->type->value . ' ' . $this->credentials,
        ];
    }
}
