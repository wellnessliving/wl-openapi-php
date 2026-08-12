<?php

namespace WlSdk\Thoth\LayoutBe\Footer;

class FooterGetRequest
{
    /**
     * Business key to get footer data for.
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
