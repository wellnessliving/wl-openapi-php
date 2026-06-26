<?php

namespace WlSdk\Wl\Marketing\Overview\Welcome;

/**
 * Response from GET
 */
class WelcomeGetResponse
{
    /**
     * Determines whether welcome screen should be shown.
     *
     * @var bool|null
     */
    public ?bool $show_welcome = null;

    public function __construct(array $data)
    {
        $this->show_welcome = isset($data['show_welcome']) ? (bool)$data['show_welcome'] : null;
    }
}
