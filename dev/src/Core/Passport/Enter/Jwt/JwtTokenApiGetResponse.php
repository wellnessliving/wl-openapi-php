<?php
namespace WlSdk\Core\Passport\Enter\Jwt;

/**
 * Response from GET
 */
class JwtTokenApiGetResponse
{
    /**
     * Jwt token that allows to authenticate user.
     *
     * @var string|null
     */
    public ?string $s_token = null;

    public function __construct(array $data)
    {
        $this->s_token = isset($data['s_token']) ? (string)$data['s_token'] : null;
    }
}
