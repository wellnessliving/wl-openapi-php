<?php

namespace WlSdk\Wl\Shop\Product\Option\Inventory\Count;

class InventoryCountGetRequest
{
    /**
     * The list of notes for product options in the store.
     * Keys refer to product options in the store. Values refer to text notes.
     *
     * @var string[]|null
     */
    public ?array $a_note = null;

    /**
     * The list of product option quantities in the store.
     * Keys refer to product options in the store. Values refer to product counts.
     *
     * @var int[]|null
     */
    public ?array $a_quantity = null;

    /**
     * The current business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The product barcode, used for the search.
     *
     * @var string|null
     */
    public ?string $text_barcode = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_note' => $this->a_note,
            'a_quantity' => $this->a_quantity,
            'k_business' => $this->k_business,
            'text_barcode' => $this->text_barcode,
            ],
            static fn ($v) => $v !== null
        );
    }
}
