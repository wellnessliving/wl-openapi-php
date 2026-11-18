<?php

namespace WlSdk\Wl\Login\Attendance\Add;

class AddGetResponseLoginPromotion
{
    /**
     * The login promotion key, available to pay for the session.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The time left on the login promotion in hours and minutes, for example `2 h 25 min`.
     * An empty string if the program of the promotion is not of the type {@link \WlSdk\RsProgramTypeSid},
     * or if the promotion has no limit of time.
     *
     * @var string|null
     */
    public ?string $text_remain_duration = null;

    /**
     * The title of the login promotion.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->text_remain_duration = isset($data['text_remain_duration']) ? (string)$data['text_remain_duration'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
