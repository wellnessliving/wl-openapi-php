<?php

namespace WlSdk\Wl\Pay\Form;

class EnvironmentGetResponsePayProcessorPublicKeys
{
    /**
     * Checkout SDK public key. `null` if 3DS is disabled for this merchant.
     *
     * @var string|null
     */
    public ?string $s_checkout = null;

    public function __construct(array $data)
    {
        $this->s_checkout = isset($data['s_checkout']) ? (string)$data['s_checkout'] : null;
    }
}
