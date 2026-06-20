<?php

namespace WlSdk\Wl\AiAgent\Link;

class SendMailPostRequest
{
    /**
     * Purchase item ID. Required if `text_action` is 'purchase'.
     *
     * One of the {@link \WlSdk\RsPurchaseItemSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsPurchaseItemSid
     */
    public ?int $id_purchase_item = null;

    /**
     * Service ID. Required if `text_action` is 'booking'.
     *
     * @var int|null
     * @see \WlSdk\RsServiceSid
     */
    public ?int $id_service = null;

    /**
     * Business key. Required.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Unique identifier for the link.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * Action type. Must be 'purchase' or 'booking'.
     *
     * @var string|null
     */
    public ?string $text_action = null;

    /**
     * User ID. Required.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_purchase_item' => $this->id_purchase_item,
            'id_service' => $this->id_service,
            'k_business' => $this->k_business,
            'k_id' => $this->k_id,
            'text_action' => $this->text_action,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
