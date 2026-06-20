<?php
namespace WlSdk\Wl\Appointment\Book\Payment;

class PaymentMultipleGetResponsePromotionData
{
    /**
     * The visit count limit of the promotion.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * The count of remaining visits.
     *
     * @var int|null
     */
    public ?int $i_remain = null;

    /**
     * The expiration date.
     *
     * @var string|null
     */
    public ?string $s_expire = null;

    /**
     * The title of the promotion.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_remain = isset($data['i_remain']) ? (int)$data['i_remain'] : null;
        $this->s_expire = isset($data['s_expire']) ? (string)$data['s_expire'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
