<?php

declare(strict_types=1);

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Treblle\Tools\Http\Enums\Status;
use Treblle\Tools\Http\Responses\CollectionResponse;

it('can create a new Collection Response', function (): void {
    expect(
        new CollectionResponse(
            data: new Collection(),
        )
    )->toBeInstanceOf(CollectionResponse::class);
});

it('can create a Json Response', function (): void {
    $response = (new CollectionResponse(
        data: new Collection(),
    ))->toResponse(
        request: Request::create(
            uri: '/',
        )
    );

    expect(
        $response,
    )->toBeInstanceOf(JsonResponse::class)->and(
        $response->status(),
    )->toEqual(Status::OK->value)->and(
        $response->headers->all(),
    )->toBeArray();
});
