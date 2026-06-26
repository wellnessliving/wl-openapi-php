<?php

namespace WlSdk\Wl\Promotion\Purchase;

class PurchaseListGetResponsePromotionPromotion
{
    /**
     * ID of promotion, primary key in RsPromotionSql.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    /**
     * Title of promotion.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_promotion = isset($data['k_promotion']) ? (string)$data['k_promotion'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
