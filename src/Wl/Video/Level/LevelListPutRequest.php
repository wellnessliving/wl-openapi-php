<?php

namespace WlSdk\Wl\Video\Level;

class LevelListPutRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * A list of video level keys in the order to be saved.
     *
     * @var string[]|null
     */
    public ?array $a_order = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_order' => $this->a_order,
            ],
            static fn ($v) => $v !== null
        );
    }
}
