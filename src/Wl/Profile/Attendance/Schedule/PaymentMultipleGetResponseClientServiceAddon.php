<?php

namespace WlSdk\Wl\Profile\Attendance\Schedule;

class PaymentMultipleGetResponseClientServiceAddon
{
    /**
     * Number of the product.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * `true` if the product is paid, otherwise `false`.
     *
     * @var bool|null
     */
    public ?bool $is_paid = null;

    /**
     * Formatted product price
     *
     * @var string|null
     */
    public ?string $html_price = null;

    /**
     * Product price.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * Product title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->i_count = isset($data['i_count']) ? (int)$data['i_count'] : null;
        $this->is_paid = isset($data['is_paid']) ? (bool)$data['is_paid'] : null;
        $this->html_price = isset($data['html_price']) ? (string)$data['html_price'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
