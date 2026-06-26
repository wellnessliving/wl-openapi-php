<?php

namespace WlSdk\Core\Debug\Run;

class KillDeleteRequest
{
    /**
     * A list of process IDs to kill.
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
