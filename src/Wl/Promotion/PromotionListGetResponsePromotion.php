<?php

namespace WlSdk\Wl\Promotion;

class PromotionListGetResponsePromotion
{
    /**
     * The promotion program. One of the {@link \WlSdk\RsProgramSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsProgramSid
     */
    public ?int $id_program = null;

    /**
     * The type of the promotion program. One of the {@link \WlSdk\RsProgramTypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsProgramTypeSid
     */
    public ?int $id_program_type = null;

    /**
     * Whether the promotion is active.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Whether the promotion is a component.
     *
     * @var bool|null
     */
    public ?bool $is_component = null;

    /**
     * Whether the promotion is expired.
     *
     * @var bool|null
     */
    public ?bool $is_expired = null;

    /**
     * The key of the promotion.
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

    public function __construct(array $data)
    {
        $this->id_program = isset($data['id_program']) ? (int)$data['id_program'] : null;
        $this->id_program_type = isset($data['id_program_type']) ? (int)$data['id_program_type'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_component = isset($data['is_component']) ? (bool)$data['is_component'] : null;
        $this->is_expired = isset($data['is_expired']) ? (bool)$data['is_expired'] : null;
        $this->k_promotion = isset($data['k_promotion']) ? (string)$data['k_promotion'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
