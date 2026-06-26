<?php

namespace WlSdk\Wl\Page\BackAdmin\Position;

class PositionPostRequest
{
    /**
     * Value of left property.
     *
     * @var string|null
     */
    public ?string $i_left = null;

    /**
     * Value of top property.
     *
     * @var string|null
     */
    public ?string $i_top = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_left' => $this->i_left,
            'i_top' => $this->i_top,
            ],
            static fn ($v) => $v !== null
        );
    }
}
