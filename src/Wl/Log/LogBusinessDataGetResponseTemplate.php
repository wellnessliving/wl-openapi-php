<?php

namespace WlSdk\Wl\Log;

class LogBusinessDataGetResponseTemplate
{
    /**
     * Log data template.
     *
     * @var string|null
     */
    public ?string $html_template = null;

    public function __construct(array $data)
    {
        $this->html_template = isset($data['html_template']) ? (string)$data['html_template'] : null;
    }
}
