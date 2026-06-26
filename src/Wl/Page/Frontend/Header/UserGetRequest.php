<?php

namespace WlSdk\Wl\Page\Frontend\Header;

class UserGetRequest
{
    /**
     * Business key. Empty if user is not logged in.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Current location.
     *
     * @var string|null
     */
    public ?string $text_current = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_current' => $this->text_current,
            ],
            static fn ($v) => $v !== null
        );
    }
}
