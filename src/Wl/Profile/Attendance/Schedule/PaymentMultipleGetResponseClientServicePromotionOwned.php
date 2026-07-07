<?php

namespace WlSdk\Wl\Profile\Attendance\Schedule;

class PaymentMultipleGetResponseClientServicePromotionOwned
{
    /**
     * Limit of visits.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * Sort order.
     *
     * @var int|null
     */
    public ?int $i_order = null;

    /**
     * The number of the remaining visits.
     *
     * @var int|null
     */
    public ?int $i_remain = null;

    /**
     * Promotion key.
     *
     * @var string|null
     */
    public ?string $text_key = null;

    /**
     * Promotion price.
     *
     * @var string|null
     */
    public ?string $text_price = null;

    /**
     * Promotion title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Promotion title with number of remaining sessions.
     *
     * @var string|null
     */
    public ?string $text_title_remain = null;

    public function __construct(array $data)
    {
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_order = isset($data['i_order']) ? (int)$data['i_order'] : null;
        $this->i_remain = isset($data['i_remain']) ? (int)$data['i_remain'] : null;
        $this->text_key = isset($data['text_key']) ? (string)$data['text_key'] : null;
        $this->text_price = isset($data['text_price']) ? (string)$data['text_price'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->text_title_remain = isset($data['text_title_remain']) ? (string)$data['text_title_remain'] : null;
    }
}
