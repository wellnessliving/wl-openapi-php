<?php
namespace WlSdk\Wl\Promotion;

class PromotionListGetResponsePromotion
{
    /**
     * The promotion program. One of the {@link \WlSdk\RsProgramSid} constants.
     *
     * @var int|null
     */
    public ?int $id_program = null;

    /**
     * The type of the promotion program. One of the {@link \WlSdk\RsProgramTypeSid} constants.
     *
     * @var int|null
     */
    public ?int $id_program_type = null;

    /**
     * Whether the promotion is active.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

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
        $this->k_promotion = isset($data['k_promotion']) ? (string)$data['k_promotion'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
