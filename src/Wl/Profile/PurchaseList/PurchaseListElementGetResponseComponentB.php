<?php
namespace WlSdk\Wl\Profile\PurchaseList;

class PurchaseListElementGetResponseComponentB
{
    /**
     * Purchase item type. One of {@link \WlSdk\RsPurchaseItemSid} constants.
     *
     * @var \WlSdk\RsPurchaseItemSid|null
     */
    public ?\WlSdk\RsPurchaseItemSid $id_purchase_item = null;

    /**
     * ID of the item. Will be different for different {@link \WlSdk\RsPurchaseItemSid} constants.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * Title of the coupon component.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id_purchase_item = isset($data['id_purchase_item']) ? \WlSdk\RsPurchaseItemSid::tryFrom((int)$data['id_purchase_item']) : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
