<?php

namespace WlSdk\Core\Prg\AsyncTask;

class AsyncThreadListDeleteRequest
{
    /**
     * A list of identifiers of asynchronous task.
     *
     * One identifier is a copy of result of {@link \WlSdk\Core\Async\CoreAsyncAbstract}.
     *
     * @var string[]|null
     */
    public ?array $a_id = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_id' => $this->a_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
