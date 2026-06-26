<?php

namespace WlSdk\Wl\Business\Sms;

/**
 * Response from POST
 */
class SmsSendPostResponse
{
    /**
     * Local date with time when sms sent successfully (or failed) in MySQL format.
     *
     * If business is not specified, will not be returned.
     *
     * @var string|null
     */
    public ?string $dtl_send = null;

    public function __construct(array $data)
    {
        $this->dtl_send = isset($data['dtl_send']) ? (string)$data['dtl_send'] : null;
    }
}
