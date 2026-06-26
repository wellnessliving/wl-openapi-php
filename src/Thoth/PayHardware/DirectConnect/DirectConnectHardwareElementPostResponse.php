<?php

namespace WlSdk\Thoth\PayHardware\DirectConnect;

/**
 * Response from POST
 */
class DirectConnectHardwareElementPostResponse
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
