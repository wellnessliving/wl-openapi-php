<?php

namespace WlSdk\Wl\Virtual\Subscription;

/**
 * Response from PUT
 */
class UpgradePutResponse
{
    /**
     * Url link to redirect after successful upgrade.
     *
     * `null` in a case if no redirect should appear.
     *
     * @var string|null
     */
    public ?string $url_redirect = null;

    public function __construct(array $data)
    {
        $this->url_redirect = isset($data['url_redirect']) ? (string)$data['url_redirect'] : null;
    }
}
