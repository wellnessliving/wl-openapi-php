<?php

namespace WlSdk\Wl\Discount\Code\Edit;

class DiscountCodeEditGetResponseComponent
{
    /**
     * Type ID of the purchase item. One of {@link \WlSdk\RsPurchaseItemSid} constants.
     *
     * @var int|null
     */
    public ?int $id_purchase_item = null;

    /**
     * Primary key of the component.
     * <p>Special Notes:</p>
     * <ul>
     *   <li>Zero means that all elements of this type are available.</li>
     *   <li>For `id_purchase_item`={@link \WlSdk\RsPurchaseItemSid} we store .`k_class` in the `k_id` field.</li>
     * </ul>
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * Title of the component.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id_purchase_item = isset($data['id_purchase_item']) ? (int)$data['id_purchase_item'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
