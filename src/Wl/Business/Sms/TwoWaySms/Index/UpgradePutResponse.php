<?php

namespace WlSdk\Wl\Business\Sms\TwoWaySms\Index;

/**
 * Response from PUT
 */
class UpgradePutResponse
{
    /**
     * Redirect URL.
     *
     * @var string|null
     */
    public ?string $url_redirect = null;

    public function __construct(array $data)
    {
        $this->url_redirect = isset($data['url_redirect']) ? (string)$data['url_redirect'] : null;
    }
}
