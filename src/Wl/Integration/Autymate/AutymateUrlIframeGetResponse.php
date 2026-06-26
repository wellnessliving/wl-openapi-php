<?php

namespace WlSdk\Wl\Integration\Autymate;

/**
 * Response from GET
 */
class AutymateUrlIframeGetResponse
{
    /**
     * URL to use in the Autymate iframe.
     *
     * @var string|null
     */
    public ?string $url_iframe = null;

    public function __construct(array $data)
    {
        $this->url_iframe = isset($data['url_iframe']) ? (string)$data['url_iframe'] : null;
    }
}
