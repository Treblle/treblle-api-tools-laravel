<?php

declare(strict_types=1);

namespace Treblle\Tools\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Database\Eloquent\Collection;
use Treblle\Tools\Http\Concerns\HasResponse;
use Treblle\Tools\Http\Enums\Status;

final class CollectionResponse implements Responsable
{
    use HasResponse;

    public function __construct(
        private readonly Collection $data,
        private readonly Status $status = Status::OK,
    ) {
    }
}
