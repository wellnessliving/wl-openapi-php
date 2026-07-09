<?php

namespace WlSdk\Wl\Pay\Processor\StripeCom;

/**
 * Response from POST
 */
class StripeComKeyPostResponse
{
    /**
     * Merchant public key.
     *
     * `null` before the key is set.
     * It is set by `post()`.
     *
     * @var string|null
     */
    public ?string $s_public = null;

    public function __construct(array $data)
    {
        $this->s_public = isset($data['s_public']) ? (string)$data['s_public'] : null;
    }
}
