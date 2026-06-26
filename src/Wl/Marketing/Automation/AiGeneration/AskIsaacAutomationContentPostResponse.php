<?php

namespace WlSdk\Wl\Marketing\Automation\AiGeneration;

/**
 * Response from POST
 */
class AskIsaacAutomationContentPostResponse
{
    /**
     * Request payload prepared for the ISAAC marketing generation API.
     *
     * @var array|null
     */
    public ?array $a_request_payload = null;

    public function __construct(array $data)
    {
        $this->a_request_payload = isset($data['a_request_payload']) ? (array)$data['a_request_payload'] : null;
    }
}
