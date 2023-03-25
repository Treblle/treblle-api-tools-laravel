<?php

declare(strict_types=1);

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Treblle\Tools\Http\Enums\Status;
use Treblle\Tools\Http\Responses\ModelResponse;

it('can create a new Model Response', function (): void {
    expect(
        new ModelResponse(
            data: new User(),
        )
    )->toBeInstanceOf(ModelResponse::class);
});

it('can create a Json Response', function (): void {
    $response = (new ModelResponse(
        data: new User(),
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
