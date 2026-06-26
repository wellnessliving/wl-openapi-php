<?php

namespace WlSdk\Core\Prg\AsyncTask;

class AsyncThreadListGetRequest
{
    /**
     * An identifier of asynchronous task.
     *
     * One identifier is a copy of result of {@link \WlSdk\Core\Async\CoreAsyncAbstract}.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    public function params(): array
    {
        return array_filter(
            [
            's_id' => $this->s_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
