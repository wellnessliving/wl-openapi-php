<?php

namespace WlSdk\Wl\Purchase\Item;

class PurchaseItemAmountGetRequest
{
    /**
     * Client prorate date.
     *
     * @var string|null
     */
    public ?string $dl_client_prorate = null;

    /**
     * Number of units of the purchase item.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * ID of the purchase item.
     * One of {@link \WlSdk\RsPurchaseItemSid} constants.
     * Key of the appropriate item stored in `k_id`.
     *
     * @var int|null
     * @see \WlSdk\RsPurchaseItemSid
     */
    public ?int $id_purchase_item = null;

    /**
     * Whether purchase item is new.
     *
     * @var bool|null
     */
    public ?bool $is_new = null;

    /**
     * Key of the business that should be set to the purchase item.
     * Primary key from RsBusinessSql.
     *
     * `null` if not set.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the item within appropriate table according to `id_purchase_item`.
     *
     * Can be `null` if it is new purchase item.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * Key of the location purchase occur. Primary key from RsLocationSql.
     *
     * `null` if not set.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Key of the reward prize that should be applied to the purchase item.
     * Primary key from RsRewardPrizeSql.
     *
     * @var string|null
     */
    public ?string $k_reward_prize = null;

    /**
     * Manual price that should be set to the purchase item.
     *
     * `null` if not set.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * Key of the user that performs purchase.
     * Primary key from PassportLoginSql.
     *
     * @var string|null
     */
    public ?string $uid_purchase = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_client_prorate' => $this->dl_client_prorate,
            'i_count' => $this->i_count,
            'id_purchase_item' => $this->id_purchase_item,
            'is_new' => $this->is_new,
            'k_business' => $this->k_business,
            'k_id' => $this->k_id,
            'k_location' => $this->k_location,
            'k_reward_prize' => $this->k_reward_prize,
            'm_price' => $this->m_price,
            'uid_purchase' => $this->uid_purchase,
            ],
            static fn ($v) => $v !== null
        );
    }
}
