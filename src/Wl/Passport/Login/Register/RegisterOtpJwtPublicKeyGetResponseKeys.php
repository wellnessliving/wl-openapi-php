<?php

namespace WlSdk\Wl\Passport\Login\Register;

class RegisterOtpJwtPublicKeyGetResponseKeys
{
    /**
     * Signing algorithm. Always 'RS256'.
     *
     * @var string|null
     */
    public ?string $alg = null;

    /**
     * RSA public exponent in base64url format.
     *
     * @var string|null
     */
    public ?string $e = null;

    /**
     * Key identifier for JWT header matching.
     *
     * @var string|null
     */
    public ?string $kid = null;

    /**
     * Key type. Always 'RSA'.
     *
     * @var string|null
     */
    public ?string $kty = null;

    /**
     * RSA modulus in base64url format.
     *
     * @var string|null
     */
    public ?string $n = null;

    /**
     * Public key usage. Always 'sig'.
     *
     * @var string|null
     */
    public ?string $use = null;

    public function __construct(array $data)
    {
        $this->alg = isset($data['alg']) ? (string)$data['alg'] : null;
        $this->e = isset($data['e']) ? (string)$data['e'] : null;
        $this->kid = isset($data['kid']) ? (string)$data['kid'] : null;
        $this->kty = isset($data['kty']) ? (string)$data['kty'] : null;
        $this->n = isset($data['n']) ? (string)$data['n'] : null;
        $this->use = isset($data['use']) ? (string)$data['use'] : null;
    }
}
