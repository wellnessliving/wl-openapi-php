<?php

namespace WlSdk\Wl\Business\Feature;

class FeatureInitTestPostRequest
{
    /**
     * Key of the business. Primary key RsBusinessSql table.
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
