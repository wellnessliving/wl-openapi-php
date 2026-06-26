<?php

namespace WlSdk\Wl\Promotion\Purchase;

class PurchaseListGetResponsePromotion
{
    /**
     * Promotion list. Each element has keys:
     *
     * @var PurchaseListGetResponsePromotionPromotion|null
     */
    public ?PurchaseListGetResponsePromotionPromotion $a_promotion = null;

    /**
     * Promotion program. One of {@link \WlSdk\RsProgramSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsProgramSid
     */
    public ?int $id_program = null;

    /**
     * Promotion program type. One of {@link \WlSdk\RsProgramTypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsProgramTypeSid
     */
    public ?int $id_program_type = null;

    /**
     * Program type title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_promotion = isset($data['a_promotion']) ? new PurchaseListGetResponsePromotionPromotion((array)$data['a_promotion']) : null;
        $this->id_program = isset($data['id_program']) ? (int)$data['id_program'] : null;
        $this->id_program_type = isset($data['id_program_type']) ? (int)$data['id_program_type'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
