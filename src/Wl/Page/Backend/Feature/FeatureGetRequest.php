<?php

namespace WlSdk\Wl\Page\Backend\Feature;

class FeatureGetRequest
{
    /**
     * Key of the business. Primary key from RsBusinessSql table.
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
