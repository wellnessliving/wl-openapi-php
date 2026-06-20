<?php
namespace WlSdk\Wl\Catalog\CatalogList;

class ElementGetResponseDataComponent
{
    /**
     * Program ID. One of {@link \WlSdk\RsProgramSid} ID's. Only applies to promotions.
     *
     * @var \WlSdk\RsProgramSid|null
     */
    public ?\WlSdk\RsProgramSid $id_program = null;

    /**
     * Purchase item ID. One of {@link \WlSdk\RsPurchaseItemSid} ID's.
     *
     * @var \WlSdk\RsPurchaseItemSid|null
     */
    public ?\WlSdk\RsPurchaseItemSid $id_purchase_item = null;

    /**
     * Sale ID. One of {@link \WlSdk\RsSaleSid} ID's.
     *
     * @var \WlSdk\RsSaleSid|null
     */
    public ?\WlSdk\RsSaleSid $id_sale = null;

    /**
     * The identifier of the item.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The title of the item.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id_program = isset($data['id_program']) ? \WlSdk\RsProgramSid::tryFrom((int)$data['id_program']) : null;
        $this->id_purchase_item = isset($data['id_purchase_item']) ? \WlSdk\RsPurchaseItemSid::tryFrom((int)$data['id_purchase_item']) : null;
        $this->id_sale = isset($data['id_sale']) ? \WlSdk\RsSaleSid::tryFrom((int)$data['id_sale']) : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
