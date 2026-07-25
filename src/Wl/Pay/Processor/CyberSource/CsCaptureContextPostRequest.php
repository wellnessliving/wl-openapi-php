<?php

namespace WlSdk\Wl\Pay\Processor\CyberSource;

class CsCaptureContextPostRequest
{
    /**
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the business merchant that should be used to perform the request.
     *
     * @var string|null
     */
    public ?string $k_business_merchant = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_business_merchant' => $this->k_business_merchant,
            ],
            static fn ($v) => $v !== null
        );
    }
}
