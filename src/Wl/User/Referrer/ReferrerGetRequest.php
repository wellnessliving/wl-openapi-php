<?php

namespace WlSdk\Wl\User\Referrer;

class ReferrerGetRequest
{
    /**
     * The key of the current business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The string to be used for searching for a referrer.
     *
     * @var string|null
     */
    public ?string $s_search = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_search' => $this->s_search,
            ],
            static fn ($v) => $v !== null
        );
    }
}
