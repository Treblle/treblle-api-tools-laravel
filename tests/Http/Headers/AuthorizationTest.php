<?php

declare(strict_types=1);

use Treblle\Tools\Http\Enums\Headers\AuthScheme;
use Treblle\Tools\Http\Headers\Authorization;

it('can create Basic Authorization headers', function (string $credentials): void {
    $authorization = new Authorization(
        type: AuthScheme::BASIC,
        credentials: $credentials,
    );

    expect(
        $authorization,
    )->toBeInstanceOf(Authorization::class)->and(
        $authorization->toArray()
    )->toBeArray()->toEqual([
        'type' => AuthScheme::BASIC,
        'credentials' => $credentials,
    ])->and(
        $authorization->toHeader()
    )->toBeArray()->toEqual([
        'Authorization' => "Basic $credentials",
    ]);
})->with('basics');
