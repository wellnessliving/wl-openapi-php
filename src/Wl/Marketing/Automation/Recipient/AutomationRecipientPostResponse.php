<?php

namespace WlSdk\Wl\Marketing\Automation\Recipient;

/**
 * Response from POST
 */
class AutomationRecipientPostResponse
{
    /**
     * Number of recipients successfully added to the automation.
     *
     * @var int|null
     */
    public ?int $i_recipient_add = null;

    /**
     * Number of recipients that are already in progress and were not added again.
     *
     * @var int|null
     */
    public ?int $i_recipient_progress = null;

    public function __construct(array $data)
    {
        $this->i_recipient_add = isset($data['i_recipient_add']) ? (int)$data['i_recipient_add'] : null;
        $this->i_recipient_progress = isset($data['i_recipient_progress']) ? (int)$data['i_recipient_progress'] : null;
    }
}
