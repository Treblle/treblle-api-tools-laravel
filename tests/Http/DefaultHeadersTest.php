<?php

declare(strict_types=1);

use Treblle\Tools\Http\DefaultHeaders;

it('can get the default headers', function (): void {
    expect(
        (new DefaultHeaders())->default(),
    )->toBeArray()->toHaveKeys(
        keys: array_keys((array) config('tools.defaults.headers')),
    );
});
