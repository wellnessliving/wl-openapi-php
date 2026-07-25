<?php

namespace WlSdk\Wl\Location\View;

class ViewGetRequest
{
    /**
     * Maximum location image height.
     *
     * @var int|null
     */
    public ?int $i_logo_height = 100;

    /**
     * Maximum location image width.
     *
     * @var int|null
     */
    public ?int $i_logo_width = 220;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_logo_height' => $this->i_logo_height,
            'i_logo_width' => $this->i_logo_width,
            'k_location' => $this->k_location,
            ],
            static fn ($v) => $v !== null
        );
    }
}
