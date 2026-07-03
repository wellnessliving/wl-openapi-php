<?php

namespace WlSdk\Wl\Profile\Contract;

class ContractGetRequest
{
    /**
     * The start date of the contract.
     *
     * @var string|null
     */
    public ?string $dt_start = null;

    /**
     * The percentage discount for the item.
     *
     * @var float|null
     */
    public ?float $f_manual_discount = null;

    /**
     * The type of purchase item. This is one of the {@link \WlSdk\RsPurchaseItemSid} constants.
     * Optional if [ContractApi::$k_purchase_item](/Wl/Profile/Contract/Contract.json) is not empty.
     *
     * @var int|null
     * @see \WlSdk\RsPurchaseItemSid
     */
    public ?int $id_purchase_item = null;

    /**
     * The key of the business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the purchase item in the database.
     * The item key. Depends on [ContractApi::$id_purchase_item](/Wl/Profile/Contract/Contract.json) property.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The key of the selected location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the selected purchase item.
     *
     * @var string|null
     */
    public ?string $k_purchase_item = null;

    /**
     * Amount of a flat manual discount.
     *
     * @var string|null
     */
    public ?string $m_discount_flat = null;

    /**
     * The custom price of the item.
     *
     * @var string|null
     */
    public ?string $m_price_custom = null;

    /**
     * The discount code used for the item.
     *
     * @var string|null
     */
    public ?string $s_discount_code = null;

    /**
     * The key of the current user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_start' => $this->dt_start,
            'f_manual_discount' => $this->f_manual_discount,
            'id_purchase_item' => $this->id_purchase_item,
            'k_business' => $this->k_business,
            'k_id' => $this->k_id,
            'k_location' => $this->k_location,
            'k_purchase_item' => $this->k_purchase_item,
            'm_discount_flat' => $this->m_discount_flat,
            'm_price_custom' => $this->m_price_custom,
            's_discount_code' => $this->s_discount_code,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
