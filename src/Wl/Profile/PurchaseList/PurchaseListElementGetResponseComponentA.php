<?php

namespace WlSdk\Wl\Profile\PurchaseList;

class PurchaseListElementGetResponseComponentA
{
    /**
     * The booking enrollment key.
     *
     * @var string|null
     */
    public ?string $k_enrollment_book = null;

    /**
     * The key referencing the product a user purchased.
     *
     * @var string|null
     */
    public ?string $k_login_product = null;

    /**
     * The key of a user's Purchase Option.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The key of a user's session pass.
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
