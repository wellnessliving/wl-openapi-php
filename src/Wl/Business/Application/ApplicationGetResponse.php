<?php

namespace WlSdk\Wl\Business\Application;

/**
 * Response from GET
 */
class ApplicationGetResponse
{
    /**
     * Application title. Empty for default application.
     *
     * @var string|null
     */
    public ?string $text_application_title = null;

    public function __construct(array $data)
    {
        $this->text_application_title = isset($data['text_application_title']) ? (string)$data['text_application_title'] : null;
    }
}
