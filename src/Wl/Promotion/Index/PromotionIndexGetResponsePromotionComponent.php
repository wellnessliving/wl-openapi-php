<?php
namespace WlSdk\Wl\Promotion\Index;

class PromotionIndexGetResponsePromotionComponent
{
    /**
     * The type of the component.
     *  One of {@link \WlSdk\RsPurchaseItemSid} constants.
     *  This can only be: <ul>
     *      <li>{@link \WlSdk\RsPurchaseItemSid}</li>
     *      <li>{@link \WlSdk\RsPurchaseItemSid}</li>
     *      <li>{@link \WlSdk\RsPurchaseItemSid}</li>
     *  </ul>
     *
     * @var int|null
     */
    public ?int $id_purchase_item = null;

    /**
     * The primary key of the component in the related table. This depends on the type of the component.
     * The key of the event for {@link \WlSdk\RsPurchaseItemSid}, the key of the Purchase Option for the
     * {@link \WlSdk\RsPurchaseItemSid}, the key of the product option for the {@link \WlSdk\RsPurchaseItemSid}.
     * Full information about events can be taken from the [EventListApi](/Wl/Event/EventList.json). Purchase
     * Options from the [PromotionIndexApi](/Wl/Promotion/Index/PromotionIndex.json).
     * Full information about products are not available at this moment though API.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The quantity. If empty, it means the quantity is 1.
     *
     * @var int|null
     */
    public ?int $i_quantity = null;

    /**
     * The name of the component.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id_purchase_item = isset($data['id_purchase_item']) ? (int)$data['id_purchase_item'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->i_quantity = isset($data['i_quantity']) ? (int)$data['i_quantity'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
