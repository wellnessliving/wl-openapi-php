<?php

namespace WlSdk\Core\Prg;

class PrgKeywordGetRequest
{
    /**
     * Mode for load keyword. One of {@link \WlSdk\Core\Prg\PrgKeywordModeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Core\Prg\PrgKeywordModeSid
     */
    public ?int $id_mode = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mode' => $this->id_mode,
            ],
            static fn ($v) => $v !== null
        );
    }
}
