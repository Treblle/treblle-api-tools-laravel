<?php

declare(strict_types=1);

namespace Treblle\Tools\Http\Concerns;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Treblle\Tools\Facades\Http\Headers;
use Treblle\Tools\Http\Enums\Status;

/**
 * @property-read mixed $data
 * @property-read Status $status
 */
trait HasResponse
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function toResponse($request): JsonResponse
    {
        return new JsonResponse(
            data: $this->data,
            status: $this->status->value,
            headers: Headers::default(),
        );
    }
}
