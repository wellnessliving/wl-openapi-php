<?php

namespace WlSdk\Wl\Appointment\Book\Purchase;

class Purchase72GetResponseLoginPrize
{
    /**
     * Login prize remaining quantity.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * Key of login prize.
     *
     * @var string|null
     */
    public ?string $k_login_prize = null;

    /**
     * User friendly login prize description.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    public function __construct(array $data)
    {
        $this->i_count = isset($data['i_count']) ? (int)$data['i_count'] : null;
        $this->k_login_prize = isset($data['k_login_prize']) ? (string)$data['k_login_prize'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
    }
}
