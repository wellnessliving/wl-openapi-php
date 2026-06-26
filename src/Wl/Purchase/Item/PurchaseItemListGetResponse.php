<?php

namespace WlSdk\Wl\Purchase\Item;

/**
 * Response from GET
 */
class PurchaseItemListGetResponse
{
    /**
     * Additional information. Uses only on desktop version.
     *
     * @var array|null
     */
    public ?array $a_additional_info = null;

    /**
     * Logo details array.
     *
     * @var array|null
     */
    public ?array $a_logo = null;

    /**
     * List of purchase items:
     *
     * @var PurchaseItemListGetResponsePurchaseItem[]|null
     */
    public ?array $a_purchase_item = null;

    /**
     * Purchase date in business timezone.
     *
     * @var string|null
     */
    public ?string $dt_date_local = null;

    /**
     * Business ID.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Purchase currency. Primary key in RsCurrencySql table.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * Purchase location. Primary key in RsLocationSql table.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Discount amount.
     *
     * @var string|null
     */
    public ?string $m_discount = null;

    /**
     * Subtotal amount.
     *
     * @var string|null
     */
    public ?string $m_subtotal = null;

    /**
     * Surcharge amount.
     *
     * `null` - if purchase is made without surcharge and not is web.
     *
     * @var string|null
     */
    public ?string $m_surcharge = null;

    /**
     * Tax amount.
     *
     * @var string|null
     */
    public ?string $m_tax = null;

    /**
     * Tips amount.
     *
     * @var string|null
     */
    public ?string $m_tip = null;

    /**
     * Total amount.
     *
     * @var string|null
     */
    public ?string $m_total = null;

    /**
     * Human-readable description of payment method.
     *
     * @var string|null
     */
    public ?string $text_pay_method = null;

    /**
     * Purchase owner. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_additional_info = isset($data['a_additional_info']) ? (array)$data['a_additional_info'] : null;
        $this->a_logo = isset($data['a_logo']) ? (array)$data['a_logo'] : null;
        $this->a_purchase_item = isset($data['a_purchase_item']) ? array_map(static fn ($item) => new PurchaseItemListGetResponsePurchaseItem((array)$item), (array)$data['a_purchase_item']) : null;
        $this->dt_date_local = isset($data['dt_date_local']) ? (string)$data['dt_date_local'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_currency = isset($data['k_currency']) ? (string)$data['k_currency'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->m_subtotal = isset($data['m_subtotal']) ? (string)$data['m_subtotal'] : null;
        $this->m_surcharge = isset($data['m_surcharge']) ? (string)$data['m_surcharge'] : null;
        $this->m_tax = isset($data['m_tax']) ? (string)$data['m_tax'] : null;
        $this->m_tip = isset($data['m_tip']) ? (string)$data['m_tip'] : null;
        $this->m_total = isset($data['m_total']) ? (string)$data['m_total'] : null;
        $this->text_pay_method = isset($data['text_pay_method']) ? (string)$data['text_pay_method'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
