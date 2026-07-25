<?php

namespace WlSdk\Wl\Profile\Attendance\Schedule;

/**
 * Response from POST
 */
class PaymentMultiplePostResponse
{
    /**
     * Url for redirect after applying existing purchase options.
     *
     * @var string|null
     */
    public ?string $url_redirect = null;

    public function __construct(array $data)
    {
        $this->url_redirect = isset($data['url_redirect']) ? (string)$data['url_redirect'] : null;
    }
}
