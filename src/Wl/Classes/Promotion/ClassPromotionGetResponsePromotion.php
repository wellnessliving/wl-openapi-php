<?php

namespace WlSdk\Wl\Classes\Promotion;

class ClassPromotionGetResponsePromotion
{
    /**
     * The promotion key.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    /**
     * The title of the promotion.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * One of the {@link \WlSdk\RsProgramSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsProgramSid
     */
    public ?int $id_program = null;

    /**
     * `true` if the promotion is related to the class or event, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_select = null;

    public function __construct(array $data)
    {
        $this->k_promotion = isset($data['k_promotion']) ? (string)$data['k_promotion'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->id_program = isset($data['id_program']) ? (int)$data['id_program'] : null;
        $this->is_select = isset($data['is_select']) ? (bool)$data['is_select'] : null;
    }
}
