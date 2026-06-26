<?php

namespace WlSdk\Thoth\WlPay\Address\Widget;

class WidgetEditGetRequest
{
    /**
     * Business primary key in RsBusinessSql table.
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
