<?php

namespace WlSdk\Wl\Appointment\Book\Payment;

class PaymentPostGetResponsePromotionData
{
    /**
     * The limit of total visits.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * The number of remaining visits.
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
     * The title of the Purchase Option.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * The time left on the Purchase Option in hours and minutes, for example `2 h 25 min`.
     * An empty string if the program of the Purchase Option is not of the type {@link \WlSdk\RsProgramTypeSid},
     * or if the Purchase Option has no limit of time.
     *
     * @var string|null
     */
    public ?string $text_remain_duration = null;

    public function __construct(array $data)
    {
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_remain = isset($data['i_remain']) ? (int)$data['i_remain'] : null;
        $this->s_expire = isset($data['s_expire']) ? (string)$data['s_expire'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->text_remain_duration = isset($data['text_remain_duration']) ? (string)$data['text_remain_duration'] : null;
    }
}
