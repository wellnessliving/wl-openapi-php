<?php

namespace WlSdk\Wl\Reception\Application;

/**
 * Response from GET
 */
class ReceptionSecretGetResponse
{
    /**
     * Generate secret key, which allows you to use reception api endpoints in the given location within the same
     * persistent session.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    public function __construct(array $data)
    {
        $this->s_secret = isset($data['s_secret']) ? (string)$data['s_secret'] : null;
    }
}
