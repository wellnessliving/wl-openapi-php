<?php

namespace WlSdk\Wl\Session;

/**
 * Response from GET
 */
class RedirectUrlGetResponse
{
    /**
     * URL to encode.
     *
     * @var string|null
     */
    public ?string $url = null;

    public function __construct(array $data)
    {
        $this->url = isset($data['url']) ? (string)$data['url'] : null;
    }
}
