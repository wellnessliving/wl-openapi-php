<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass\Apply;

class ApplyGetResponseLoginPromotion
{
    /**
     * Login promotion key.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Remaining guest pass balance description for this login promotion.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Name of the host member who owns this guest pass.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Key of the host member who owns this guest pass.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
