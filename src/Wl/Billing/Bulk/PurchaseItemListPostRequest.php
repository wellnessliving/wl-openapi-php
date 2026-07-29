<?php

namespace WlSdk\Wl\Billing\Bulk;

class PurchaseItemListPostRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location key to filter available items by.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The list of purchase items to bill. Each element is a string in the `{id_purchase_item}:{k_id}` format,
     * where
     *  `id_purchase_item` is one of the {@link \WlSdk\RsPurchaseItemSid} constants and `k_id` is the promotion key
     * for
     *  {@link \WlSdk\RsPurchaseItemSid} or the product option key for {@link \WlSdk\RsPurchaseItemSid}.
     *
     * @var int[]|null
     */
    public ?array $a_purchase_item = null;

    /**
     * Whether to charge the client default payment method (`true`) or bill the client account (`false`).
     *
     * @var bool|null
     */
    public ?bool $is_payment_method_default = null;

    /**
     * Whether to send a receipt to the client email address after billing.
     *
     * @var bool|null
     */
    public ?bool $is_receipt_send = null;

    /**
     * Whether to include the pre-configured taxes into the totals.
     *
     * @var bool|null
     */
    public ?bool $is_tax = null;

    /**
     * List of client user keys to bill joined with comma.
     *
     * @var string|null
     */
    public ?string $s_uid = null;

    /**
     * A note to store with each client purchase and to show on the receipt. Empty string for no note.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'a_purchase_item' => $this->a_purchase_item,
            'is_payment_method_default' => $this->is_payment_method_default,
            'is_receipt_send' => $this->is_receipt_send,
            'is_tax' => $this->is_tax,
            's_uid' => $this->s_uid,
            'text_note' => $this->text_note,
            ],
            static fn ($v) => $v !== null
        );
    }
}
