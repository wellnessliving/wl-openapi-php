<?php

namespace WlSdk\Wl\Integration\Ecommerce;

class OrderSyncPostRequest
{
    /**
     * A list of payment sources to pay with.
     *
     * Each element has next keys:
     *
     * @var array[]|null
     */
    public ?array $a_pay_form = null;

    /**
     * List of items to add to the order.
     *
     * Each element has keys:
     *
     * @var array[]|null
     */
    public ?array $a_purchase_item = null;

    /**
     * The WellnessLiving mode type.
     * One of the {@link \WlSdk\Wl\Mode\ModeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

    /**
     * Business to add order for.
     * Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location to add order for.
     * Primary key in RsLocationSql table.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The tip amount (optional).
     *
     * @var string|null
     */
    public ?string $m_tip = null;

    /**
     * Order key.
     *
     * @var string|null
     */
    public ?string $text_order = null;

    /**
     * The custom receipt note.
     *
     * @var string|null
     */
    public ?string $text_receipt_note = null;

    /**
     * User to add order for.
     * Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_pay_form' => $this->a_pay_form,
            'a_purchase_item' => $this->a_purchase_item,
            'id_mode' => $this->id_mode,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'm_tip' => $this->m_tip,
            'text_order' => $this->text_order,
            'text_receipt_note' => $this->text_receipt_note,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
