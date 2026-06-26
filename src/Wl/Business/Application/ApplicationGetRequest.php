<?php

namespace WlSdk\Wl\Business\Application;

class ApplicationGetRequest
{
    /**
     * Key of a business to show information for.
     *
     * Primary key from RsSkinSql table.
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
