<?php

namespace WlSdk\Wl\Business\Waiver;

class BusinessWaiverGetRequest
{
    /**
     * Business Key. Primary key in table RsBusinessSql.
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
