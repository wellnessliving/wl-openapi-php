<?php

namespace WlSdk\Wl\Business\AmazonRegion;

class AmazonRegionGetRequest
{
    /**
     * List of business key.
     *
     * @var string[]|null
     */
    public ?array $a_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_business' => $this->a_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
