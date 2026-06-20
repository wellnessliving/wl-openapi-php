<?php

namespace WlSdk\Wl\Profile\Purchase;

class PurchaseElementGetResponseComponent
{
    /**
     * Key of enrollment book.
     *
     * @var string|null
     */
    public ?string $k_enrollment_book = null;

    /**
     * Key of product.
     *
     * @var string|null
     */
    public ?string $k_login_product = null;

    /**
     * Key of promotion.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Session key.
     *
     * @var string|null
     */
    public ?string $k_session_pass = null;

    public function __construct(array $data)
    {
        $this->k_enrollment_book = isset($data['k_enrollment_book']) ? (string)$data['k_enrollment_book'] : null;
        $this->k_login_product = isset($data['k_login_product']) ? (string)$data['k_login_product'] : null;
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->k_session_pass = isset($data['k_session_pass']) ? (string)$data['k_session_pass'] : null;
    }
}
