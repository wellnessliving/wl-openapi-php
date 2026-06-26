<?php

namespace WlSdk\Core\Request\Api;

/**
 * Response from GET
 */
class KeySessionGetResponse
{
    /**
     * Session key.
     *
     * @var string|null
     */
    public ?string $s_key = null;

    public function __construct(array $data)
    {
        $this->s_key = isset($data['s_key']) ? (string)$data['s_key'] : null;
    }
}
