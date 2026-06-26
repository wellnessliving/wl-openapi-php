<?php

namespace WlSdk\Wl\Marketing\Automation;

/**
 * Response from POST
 */
class AutomationRetroactivePostResponse
{
    /**
     * Number of users who already meet the trigger condition at activation time.
     *
     * @var int|null
     */
    public ?int $i_user = null;

    /**
     * URL to the report with users who meet the trigger condition at activation time.
     *
     * @var string|null
     */
    public ?string $url_report = null;

    public function __construct(array $data)
    {
        $this->i_user = isset($data['i_user']) ? (int)$data['i_user'] : null;
        $this->url_report = isset($data['url_report']) ? (string)$data['url_report'] : null;
    }
}
