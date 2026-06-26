<?php

namespace WlSdk\Wl\Purchase\Pool;

class PoolItemGetRequest
{
    /**
     * Include only purchase pools with `i_attempt` number of done attempts or more.
     *
     * @var int|null
     */
    public ?int $i_attempt = null;

    /**
     * Type of the item in the pool from {@link \WlSdk\RsPurchaseItemSid}.
     *
     * @var int|null
     * @see \WlSdk\RsPurchaseItemSid
     */
    public ?int $id_purchase_item = null;

    /**
     * Key of the business, where pool is created.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the item, which depends on `id_purchase_item`.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The key of the login promotion. If this is set, `k_id` and
     * `id_purchase_item` are not used.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_attempt' => $this->i_attempt,
            'id_purchase_item' => $this->id_purchase_item,
            'k_business' => $this->k_business,
            'k_id' => $this->k_id,
            'k_login_promotion' => $this->k_login_promotion,
            ],
            static fn ($v) => $v !== null
        );
    }
}
