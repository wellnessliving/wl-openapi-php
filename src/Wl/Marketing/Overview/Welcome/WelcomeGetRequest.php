<?php

namespace WlSdk\Wl\Marketing\Overview\Welcome;

class WelcomeGetRequest
{
    /**
     * The business key within which request is made.
     * Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
