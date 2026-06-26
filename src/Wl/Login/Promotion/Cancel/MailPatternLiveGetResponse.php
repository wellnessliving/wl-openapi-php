<?php

namespace WlSdk\Wl\Login\Promotion\Cancel;

/**
 * Response from GET
 */
class MailPatternLiveGetResponse
{
    /**
     * HTML form content.
     *
     * @var string|null
     */
    public ?string $html_form = null;

    public function __construct(array $data)
    {
        $this->html_form = isset($data['html_form']) ? (string)$data['html_form'] : null;
    }
}
