<?php

namespace WlSdk\Core\Testing\Postman;

/**
 * Response from POST
 */
class HashPostResponse
{
    /**
     * Return hash of the string
     *
     * @var string|null
     */
    public ?string $s_hash = null;

    public function __construct(array $data)
    {
        $this->s_hash = isset($data['s_hash']) ? (string)$data['s_hash'] : null;
    }
}
