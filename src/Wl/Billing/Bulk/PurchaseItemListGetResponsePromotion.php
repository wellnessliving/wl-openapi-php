<?php

namespace WlSdk\Wl\Billing\Bulk;

class PurchaseItemListGetResponsePromotion
{
    /**
     * The promotion program. One of the {@link \WlSdk\RsProgramSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsProgramSid
     */
    public ?int $id_program = null;

    /**
     * The promotion program type. One of the {@link \WlSdk\RsProgramTypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsProgramTypeSid
     */
    public ?int $id_program_type = null;

    /**
     * `true` if no taxes should be applied to the promotion, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_tax_free = null;

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

    /**
     * Payment period of the promotion.
     *
     * @var string|null
     */
    public ?string $text_payment_period = null;

    public function __construct(array $data)
    {
        $this->id_program = isset($data['id_program']) ? (int)$data['id_program'] : null;
        $this->id_program_type = isset($data['id_program_type']) ? (int)$data['id_program_type'] : null;
        $this->is_tax_free = isset($data['is_tax_free']) ? (bool)$data['is_tax_free'] : null;
        $this->k_promotion = isset($data['k_promotion']) ? (string)$data['k_promotion'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->text_payment_period = isset($data['text_payment_period']) ? (string)$data['text_payment_period'] : null;
    }
}
