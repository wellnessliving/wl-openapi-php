<?php

namespace WlSdk\Wl\Billing\Bulk;

class PurchaseItemListGetResponsePromotion
{
    /**
     * The promotion program.
     *
     * @var int|null
     */
    public ?int $id_program = null;

    /**
     * The promotion program type.
     *
     * @var int|null
     */
    public ?int $id_program_type = null;

    /**
     * The promotion key.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    /**
     * The promotion price, excluding taxes.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * The promotion title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id_program = isset($data['id_program']) ? (int)$data['id_program'] : null;
        $this->id_program_type = isset($data['id_program_type']) ? (int)$data['id_program_type'] : null;
        $this->k_promotion = isset($data['k_promotion']) ? (string)$data['k_promotion'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
