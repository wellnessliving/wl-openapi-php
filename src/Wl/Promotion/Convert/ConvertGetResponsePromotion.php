<?php

namespace WlSdk\Wl\Promotion\Convert;

class ConvertGetResponsePromotion
{
    /**
     * Program ID for promotions from {@link \WlSdk\RsProgramSid}.
     *
     * @var int|null
     * @see \WlSdk\RsProgramSid
     */
    public ?int $id_program = null;

    /**
     * Promotion key. Primary key from RsPromotionSql table.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    /**
     * Promotion title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id_program = isset($data['id_program']) ? (int)$data['id_program'] : null;
        $this->k_promotion = isset($data['k_promotion']) ? (string)$data['k_promotion'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
