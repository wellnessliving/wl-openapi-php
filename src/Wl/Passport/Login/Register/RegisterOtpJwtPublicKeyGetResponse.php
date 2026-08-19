<?php

namespace WlSdk\Wl\Passport\Login\Register;

/**
 * Response from GET
 */
class RegisterOtpJwtPublicKeyGetResponse
{
    /**
     * Public key in JWK format.
     *
     * @var array[]|null
     */
    public ?array $a_keys = null;

    /**
     * Public key in PEM format.
     *
     * @var string|null
     */
    public ?string $s_public_key = null;

    public function __construct(array $data)
    {
        $this->a_keys = isset($data['a_keys']) ? (array)$data['a_keys'] : null;
        $this->s_public_key = isset($data['s_public_key']) ? (string)$data['s_public_key'] : null;
    }
}
