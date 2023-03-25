<?php

declare(strict_types=1);

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Treblle\Tools\Http\Enums\Status;
use Treblle\Tools\Http\Responses\MessageResponse;

it('can create a new Message Response', function (string $message): void {
    expect(
        new MessageResponse(
            data: ['message' => $message],
        )
    )->toBeInstanceOf(MessageResponse::class);
})->with('messages');

it('can create a Json Response', function (string $message): void {
    $response = (new MessageResponse(
        data: ['message' => $message],
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
})->with('messages');
