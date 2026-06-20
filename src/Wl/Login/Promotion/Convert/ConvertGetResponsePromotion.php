<?php
namespace WlSdk\Wl\Login\Promotion\Convert;

class ConvertGetResponsePromotion
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
     * One of [RsProgramSid](#/components/schemas/RsProgramSid) constants.
     *
     * @var int|null
     */
    public ?int $id_program = null;

    /**
     * If `true`, the promotion is related to the service. Otherwise, this will be `false`.
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
