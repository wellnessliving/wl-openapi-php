<?php

namespace WlSdk\Wl\Marketing\Automation;

/**
 * Response from GET
 */
class AutomationGetResponse
{
    /**
     * Call to action data.
     *
     * @var array|null
     */
    public ?array $a_action = null;

    /**
     * List of service types connected to pre-built automations.
     *
     * @var int[]|null
     */
    public ?array $a_action_service_type = null;

    /**
     * Automation data. Result of Automation::get().
     *
     * @var array[]|null
     */
    public ?array $a_automation = null;

    /**
     * List of business types connected to pre-built automations.
     *
     * @var array|null
     */
    public ?array $a_business_type = null;

    /**
     * URL of the pre-built automation image.
     * * `null` if the image is not set or in case of a business automation.
     *
     * @var string|null
     */
    public ?string $url_image = null;

    public function __construct(array $data)
    {
        $this->a_action = isset($data['a_action']) ? (array)$data['a_action'] : null;
        $this->a_action_service_type = isset($data['a_action_service_type']) ? (array)$data['a_action_service_type'] : null;
        $this->a_automation = isset($data['a_automation']) ? (array)$data['a_automation'] : null;
        $this->a_business_type = isset($data['a_business_type']) ? (array)$data['a_business_type'] : null;
        $this->url_image = isset($data['url_image']) ? (string)$data['url_image'] : null;
    }
}
