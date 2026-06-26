<?php

namespace WlSdk\Wl\Business\AuthorizeSupport;

class AuthorizeSupportEnterGetRequest
{
    /**
     * Location primary key in RsLocationSql table.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_location' => $this->k_location,
            ],
            static fn ($v) => $v !== null
        );
    }
}
