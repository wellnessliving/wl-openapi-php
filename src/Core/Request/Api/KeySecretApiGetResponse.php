<?php
namespace WlSdk\Core\Request\Api;

/**
 * Response from GET
 */
class KeySecretApiGetResponse
{
    /**
     * The secret key for the request signing.
     *
     * @var string|null
     */
    public ?string $s_key_secret = null;

    public function __construct(array $data)
    {
        $this->s_key_secret = isset($data['s_key_secret']) ? (string)$data['s_key_secret'] : null;
    }
}
