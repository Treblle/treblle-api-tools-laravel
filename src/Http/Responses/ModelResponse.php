<?php

declare(strict_types=1);

namespace Treblle\Tools\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Database\Eloquent\Model;
use Treblle\Tools\Http\Concerns\HasResponse;
use Treblle\Tools\Http\Enums\Status;

final class ModelResponse implements Responsable
{
    use HasResponse;

    public function __construct(
        private readonly Model $data,
        private readonly Status $status = Status::OK,
    ) {
    }
}
