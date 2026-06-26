<?php

namespace WlSdk\Thoth\WlPay\Form\Complete;

class CompleteGetRequest
{
    /**
     * Purchase ID.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_purchase' => $this->k_purchase,
            ],
            static fn ($v) => $v !== null
        );
    }
}
