<?php

namespace WlSdk\Wl\Marketing\Automation\CreateFlow;

class TriggerListGetRequest
{
    /**
     * Primary key of business in RsBusinessSql table.
     * `null` to use the system business.
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
