<?php

namespace WlSdk\Thoth\PayHardware\StripeCom;

/**
 * Response from POST
 */
class StripeComHardwareElementPostResponse
{
    /**
     * Terminal key.
     *
     * `null` in case when create new terminal.
     *
     * @var string|null
     */
    public ?string $k_terminal = null;

    public function __construct(array $data)
    {
        $this->k_terminal = isset($data['k_terminal']) ? (string)$data['k_terminal'] : null;
    }
}
