<?php

namespace WlSdk\Wl\Report\Mail;

/**
 * Response from GET
 */
class SmsSummaryGetResponse
{
    /**
     * Available amount of messages.
     *
     * @var int|null
     */
    public ?int $i_available = null;

    /**
     * The monthly messages the business has sent to date.
     *
     * @var int|null
     */
    public ?int $i_quantity = null;

    public function __construct(array $data)
    {
        $this->i_available = isset($data['i_available']) ? (int)$data['i_available'] : null;
        $this->i_quantity = isset($data['i_quantity']) ? (int)$data['i_quantity'] : null;
    }
}
