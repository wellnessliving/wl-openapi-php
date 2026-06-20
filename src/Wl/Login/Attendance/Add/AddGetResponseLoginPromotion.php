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
     * The title of the login promotion.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
