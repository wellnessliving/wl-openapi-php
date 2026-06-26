<?php

namespace WlSdk\Wl\Marketing\Automation\Prebuilt;

/**
 * Response from GET
 */
class AutomationPrebuiltGetResponse
{
    /**
     * Automation data. Result of Automation::get().
     *
     * @var array|null
     */
    public ?array $a_automation = null;

    /**
     * Whether there is an error.
     *
     * @var bool|null
     */
    public ?bool $has_error = null;

    public function __construct(array $data)
    {
        $this->a_automation = isset($data['a_automation']) ? (array)$data['a_automation'] : null;
        $this->has_error = isset($data['has_error']) ? (bool)$data['has_error'] : null;
    }
}
