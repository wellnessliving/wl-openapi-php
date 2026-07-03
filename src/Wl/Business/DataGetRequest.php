<?php

namespace WlSdk\Wl\Business;

class DataGetRequest
{
    /**
     * The maximum height of the business image (in pixels).
     *
     * @var int|null
     */
    public ?int $i_logo_height = null;

    /**
     * The maximum width of the business image (in pixels).
     *
     * @var int|null
     */
    public ?int $i_logo_width = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The authorization token.
     * This may be used instead of {@link \WlSdk\Wl\Business\Data} to
     * identify a business.
     *
     * @var string|null
     */
    public ?string $text_token = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_logo_height' => $this->i_logo_height,
            'i_logo_width' => $this->i_logo_width,
            'k_business' => $this->k_business,
            'text_token' => $this->text_token,
            ],
            static fn ($v) => $v !== null
        );
    }
}
