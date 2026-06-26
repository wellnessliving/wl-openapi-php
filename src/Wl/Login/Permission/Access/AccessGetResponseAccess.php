<?php

namespace WlSdk\Wl\Login\Permission\Access;

class AccessGetResponseAccess
{
    /**
     * Location key, where class or service occurs.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Class key.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Login promotion key if need to check access for specific promotion.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Resource key.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Service key.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * Login permission error code.
     *
     * @var string|null
     */
    public ?string $s_deny = null;

    public function __construct(array $data)
    {
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
        $this->k_service = isset($data['k_service']) ? (string)$data['k_service'] : null;
        $this->s_deny = isset($data['s_deny']) ? (string)$data['s_deny'] : null;
    }
}
