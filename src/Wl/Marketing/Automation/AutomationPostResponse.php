<?php

namespace WlSdk\Wl\Marketing\Automation;

/**
 * Response from POST
 */
class AutomationPostResponse
{
    /**
     * Automation key.
     *
     * @var string|null
     */
    public ?string $k_automation = null;

    public function __construct(array $data)
    {
        $this->k_automation = isset($data['k_automation']) ? (string)$data['k_automation'] : null;
    }
}
