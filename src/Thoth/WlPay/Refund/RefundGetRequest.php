<?php

namespace WlSdk\Thoth\WlPay\Refund;

class RefundGetRequest
{
    /**
     * `true` if need to refund a free purchase without any transactions, `false` if purchase has transactions.
     *
     * If it is a free purchase without any transaction, then we will not proceed the money refunds.
     * For example, it may be used to return the inventory that was obtained through the free purchases.
     *
     * @var bool|null
     */
    public ?bool $is_free = null;

    /**
     * `true` if transaction should be voided, `false` if transaction should be refunded.
     *
     * @var bool|null
     */
    public ?bool $is_void = null;

    /**
     * Business where to process purchase refund.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Purchase key.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_free' => $this->is_free,
            'is_void' => $this->is_void,
            'k_business' => $this->k_business,
            'k_purchase' => $this->k_purchase,
            ],
            static fn ($v) => $v !== null
        );
    }
}
