<?php

declare(strict_types=1);

namespace Treblle\Tools\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use Treblle\Tools\Http\Concerns\HasResponse;
use Treblle\Tools\Http\Enums\Status;

final class MessageResponse implements Responsable
{
    use HasResponse;

    /**
     * @param array{message:string} $data
     * @param Status $status
     */
    public function __construct(
        private readonly array $data,
        private readonly Status $status = Status::OK,
    ) {
    }
}
