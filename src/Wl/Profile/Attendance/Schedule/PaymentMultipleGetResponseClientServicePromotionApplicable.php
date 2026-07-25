<?php

namespace WlSdk\Wl\Profile\Attendance\Schedule;

class PaymentMultipleGetResponseClientServicePromotionApplicable
{
    /**
     * Promotion price.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * Sort order.
     *
     * @var int|null
     */
    public ?int $i_order = null;

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

    public function __construct(array $data)
    {
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->i_order = isset($data['i_order']) ? (int)$data['i_order'] : null;
        $this->text_key = isset($data['text_key']) ? (string)$data['text_key'] : null;
        $this->text_price = isset($data['text_price']) ? (string)$data['text_price'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
