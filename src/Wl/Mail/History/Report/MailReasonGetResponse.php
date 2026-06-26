<?php

namespace WlSdk\Wl\Mail\History\Report;

/**
 * Response from GET
 */
class MailReasonGetResponse
{
    /**
     * List of reasons.
     *
     * @var array|null
     */
    public ?array $a_reason = null;

    public function __construct(array $data)
    {
        $this->a_reason = isset($data['a_reason']) ? (array)$data['a_reason'] : null;
    }
}
