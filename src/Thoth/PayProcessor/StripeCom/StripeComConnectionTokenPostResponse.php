<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom;

/**
 * Response from POST
 */
class StripeComConnectionTokenPostResponse
{
    /**
     * Connection token secret key.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    public function __construct(array $data)
    {
        $this->s_secret = isset($data['s_secret']) ? (string)$data['s_secret'] : null;
    }
}
